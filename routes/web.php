<?php

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
});

Route::get('/oldbrowser', function () {
    return view('oldbrowser');
});

Route::get('/newindex', function () {
    return view('newindex');
});

Route::get('/detail/{id}', function ($id) {
    return view('detail')->with("id", $id);
});

Route::get('/cv', function () {
    return view('cv');
});
