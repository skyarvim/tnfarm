<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Welcome;
use Google\Cloud\Storage\StorageClient;

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
        $welcome = new Welcome;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $storage = new StorageClient();
            $bucket = $storage->bucket('tnfarm.appspot.com');
            $bucket->upload(
                fopen($file, 'r'),
                ['name' => 'welcome/' . $fileName, 'predefinedAcl' => 'publicRead']
            );
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
        $welcome = Welcome::find($id);
        if ($request->hasFile('image')) {
            if ($welcome->image != 'default.jpg') {
                $storage = new StorageClient();
                $bucket = $storage->bucket('tnfarm.appspot.com');
                $object = $bucket->object('welcome/' . $welcome->image);
                $object->delete();
    
            }
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $storage = new StorageClient();
            $bucket = $storage->bucket('tnfarm.appspot.com');
            $bucket->upload(
                fopen($file, 'r'),
                ['name' => 'welcome/' . $fileName, 'predefinedAcl' => 'publicRead']
            );
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
        if ($welcome->image != 'default.jpg') {
            $storage = new StorageClient();
            $bucket = $storage->bucket('tnfarm.appspot.com');
            $object = $bucket->object('welcome/' . $welcome->image);
            $object->delete();
        }
        $welcome->delete();
        return redirect()->route('admin.welcome.index');
    }
}
