<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Website;

class WebsiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('isadmin');
    }

    public function index()
    {
        return view('backend.website.index');
    }
}
