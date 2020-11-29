<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StreamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// home page
Route::get('/home', [HomeController::class, 'index']);

// video chat
Route::get('/video', [StreamController::class, 'index']);

// chat
Route::get('/chat', [ChatController::class, 'index']);


// video stream
Route::get('/stream', [StreamController::class, 'stream']);
