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
    return view('welcome');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/page1', function () {
    return view('demo');
});



<<<<<<< HEAD
//Brand Tuan
=======


//brand test
>>>>>>> test
Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/page1', function () {
    return view('demo');
});
