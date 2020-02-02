<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Welcome;

class HomeController extends Controller
{
    public function index()
    {
        $welcomes = Welcome::orderBy('id')->get();
        return view('frontend.index', compact('welcomes'));
    }
}
