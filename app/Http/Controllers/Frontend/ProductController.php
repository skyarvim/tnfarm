<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Google\Cloud\Storage\StorageClient;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $products = Product::orderBy('id')->get();
        return view('frontend.user.product.index', compact('products'));
    }

    public function create()
    {
        return view('frontend.user.product.create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $storage = new StorageClient();
            $bucket = $storage->bucket(env('GCS_BUCKET'));
            $bucket->upload(
                fopen($file, 'r'),
                ['name' => 'product/' . $fileName, 'predefinedAcl' => 'publicRead']
            );
        }
        else {
            $fileName = 'default.jpg';
        }
        $product->title = $request->input('title');
        $product->image = $fileName;
        $product->save();
        return redirect()->route('user.product.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('frontend.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->hasFile('image')) {
            if ($product->image != 'default.jpg') {
                $storage = new StorageClient();
                $bucket = $storage->bucket(env('GCS_BUCKET'));
                $object = $bucket->object('product/' . $product->image);
                $object->delete();
            }
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $storage = new StorageClient();
            $bucket = $storage->bucket(env('GCS_BUCKET'));
            $bucket->upload(
                fopen($file, 'r'),
                ['name' => 'product/' . $fileName, 'predefinedAcl' => 'publicRead']
            );
            $product->image = $fileName;
        }
        $product->title = $request->input('title');
        $product->image = $fileName;
        $product->save();
        return redirect()->route('user.product.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->image != 'default.jpg') {
            $storage = new StorageClient();
            $bucket = $storage->bucket(env('GCS_BUCKET'));
            $object = $bucket->object('product/' . $product->image);
            $object->delete();
        }
        $product->delete();
        return redirect()->route('user.product.index');
    }
}
