<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Welcome;

class WelcomeController extends Controller
{
    public function index()
    {
        $welcomes = Welcome::orderBy('id')->get();
        return view('backend.welcome.index', compact('welcomes'));
    }
    public function create()
    {
        return view('backend.welcome.create');
    }
    public function store(Request $request)
    {
        // 如果路徑不存在，就自動建立
        if (!file_exists('uploads/welcome')) {
            mkdir('uploads/welcome', 0755, true);
        }
        $welcome = new Welcome;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path() . '\uploads\welcome\\';
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
        }
        else {
            $fileName = 'default.jpg';
        }
        $welcome->title = $request->input('title');
        $welcome->image = $fileName;
        $welcome->save();
        return redirect()->route('admin.welcome.index');
    }
    public function edit($id)
    {
        $welcome = Welcome::find($id);
        return view('backend.welcome.edit', compact('welcome'));
    }
    public function update(Request $request, $id)
    {
        // 如果路徑不存在，就自動建立
        if (!file_exists('uploads/welcome')) {
            mkdir('uploads/welcome', 0755, true);
        }
        $welcome = Welcome::find($id);
        if ($request->hasFile('image')) {
            // 先刪除原本的圖片
            if ($welcome->image != 'default.jpg')
                @unlink('uploads/welcome/' . $welcome->image);
            $file = $request->file('image');
            $path = public_path() . '\uploads\welcome\\';
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $welcome->image = $fileName;
        }
        $welcome->title = $request->input('title');
        $welcome->image = $fileName;
        $welcome->save();
        return redirect()->route('admin.welcome.index');
    }
    public function destroy($id)
    {
        $welcome = Welcome::find($id);
        if ($welcome->image != 'default.jpg')
            @unlink('uploads/welcome/' . $welcome->image);
        $welcome->delete();
        return redirect()->route('admin.welcome.index');
    }
}
