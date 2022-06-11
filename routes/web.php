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
    return view('index');
})->name("index");

Route::get('/catalog', function () {
    return view('catalog');
})->name("catalog");

Route::get('/course', function () {
    return view('course');
})->name("course");

Route::get('/profile', function () {
    return view('profile');
})->name("profile");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/lesson', function () {
    return view('lesson');
})->name("lesson");
