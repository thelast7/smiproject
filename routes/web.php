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
    return view('layouts.partials.index');
});

Route::get('/about', 'AboutsController@index');

Route::get('/contact', 'ContactsController@index');
Route::post('/contact', 'ContactsController@sendMail');
