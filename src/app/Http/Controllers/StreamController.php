<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function stream()
    {
        return view('layouts/app', ['title' => 'Video', 'page' => 'video']);
    }
}
