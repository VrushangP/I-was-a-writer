<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('home');
});

Route::get('/aboutme', function () {
    return view('home');
});


Route::get('/experience', function () {
    return view('home');
});

Route::get('/co-op/cooperators', function () {
    return view('co-op/cooperators');
});

Route::get('/co-op/tekside', function () {
    return view('co-op/tekside');
});


Route::get('/projects/snake', function () {
    return view('projects/snake');
});

Route::get('/projects/voltorbFlip', function () {
    return view('projects/voltorbFlip');
});

Route::get('/projects/yomaSlayers', function () {
    return view('projects/yomaSlayers');
});

Route::get('/projects/manager', function () {
    return view('projects/manager');
});

Route::get('/projects/github', function () {
    return view('projects/github');
});
