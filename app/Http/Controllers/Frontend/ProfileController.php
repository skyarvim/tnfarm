<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('password.confirm', ['only' => ['edit']]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('frontend.user.profile.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('frontend.user.profile.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();
        return redirect()->route('user.profile.show', $id);
    }
}
