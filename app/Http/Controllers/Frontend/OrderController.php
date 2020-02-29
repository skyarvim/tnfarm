<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Google\Cloud\Storage\StorageClient;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $orders = Order::orderBy('id')->get();
        return view('frontend.user.order.index', compact('orders'));
    }

    public function create()
    {
        return view('frontend.user.order.create');
    }

    public function store(Request $request)
    {
        $order = new Order;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $storage = new StorageClient();
            $bucket = $storage->bucket(env('GCS_BUCKET'));
            $bucket->upload(
                fopen($file, 'r'),
                ['name' => 'order/' . $fileName, 'predefinedAcl' => 'publicRead']
            );
        }
        else {
            $fileName = 'default.jpg';
        }
        $order->title = $request->input('title');
        $order->image = $fileName;
        $order->save();
        return redirect()->route('user.order.index');
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('frontend.order.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        if ($request->hasFile('image')) {
            if ($order->image != 'default.jpg') {
                $storage = new StorageClient();
                $bucket = $storage->bucket(env('GCS_BUCKET'));
                $object = $bucket->object('order/' . $order->image);
                $object->delete();
            }
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $storage = new StorageClient();
            $bucket = $storage->bucket(env('GCS_BUCKET'));
            $bucket->upload(
                fopen($file, 'r'),
                ['name' => 'order/' . $fileName, 'predefinedAcl' => 'publicRead']
            );
            $order->image = $fileName;
        }
        $order->title = $request->input('title');
        $order->image = $fileName;
        $order->save();
        return redirect()->route('user.order.index');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        if ($order->image != 'default.jpg') {
            $storage = new StorageClient();
            $bucket = $storage->bucket(env('GCS_BUCKET'));
            $object = $bucket->object('order/' . $order->image);
            $object->delete();
        }
        $order->delete();
        return redirect()->route('user.order.index');
    }
}
