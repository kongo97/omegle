<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function index()
    {
        return view('layouts/app', ['title' => 'Video', 'page' => 'video']);
    }

    public function stream()
    {
        return view('layouts/app', ['title' => 'Stream', 'page' => 'stream']);
    }
}
