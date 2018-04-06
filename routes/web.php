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
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

// reminders module
Route::get('/reminders', 'RemindersController@create');
Route::post('/reminders', 'RemindersController@store');
Route::get('/manage_reminders', 'RemindersController@show');