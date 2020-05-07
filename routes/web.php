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

Route::get('/tourneyhub', function() {
    return view('tourney');
});

Route::get('/wip', function() {
    return view('wip');
});

/* APRIL TOURNEY ROUTES */

Route::get('/april/hub', function() {
    return view('/apriltourney/hub');
});

Route::get('/april/prompts', function() {
    return view('/apriltourney/prompts');
});

Route::get('/april/round/1', function() {
    return view('/apriltourney/r1');
});

Route::get('/april/round/2', function() {
    return view('/apriltourney/r2');
});

Route::get('/april/round/3', function() {
    return view('/apriltourney/r3');
});

Route::get('/april/prompt/1', function() {
    return view('/apriltourney/p1');
});

Route::get('/april/prompt/2', function() {
    return view('/apriltourney/p2');
});

Route::get('/april/prompt/3', function() {
    return view('/apriltourney/p3');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');
Route::get('/admin/create', 'ScoresController@create')->middleware('is_admin')->name('admin');

Route::post('/scores', 'ScoresController@store');
Route::get('/scores', 'ScoresController@index');
