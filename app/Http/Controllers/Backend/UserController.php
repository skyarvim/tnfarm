<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Google\Cloud\Storage\StorageClient;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('backend.user.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->status = $request->input('status');
        $user->save();
        return redirect()->route('admin.user.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
