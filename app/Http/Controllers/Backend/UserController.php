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
}
