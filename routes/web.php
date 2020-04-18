<?php

use Illuminate\Support\Facades\Route;

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
    return view('hub');
});

Route::get('/stream', function() {
    return view('stream');
});

Route::get('/prompts', function() {
    return view('stream');
});

Route::get('/scores', function() {
    return view('scores');
});

Route::get('/wip', function() {
    return view('wip');
});
