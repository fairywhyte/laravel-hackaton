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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/poll', 'PollController@index');
Route::get('/poll/create', 'PollController@create');
Route::post('/poll/store', 'PollController@store');

Route::get('/poll/{code}', 'PollController@show');
Route::get('/poll/{code}/new_option', 'OptionController@create');
Route::post('/poll/{code}/new_option', 'OptionController@store');
//we will know to which poll that we are going to save


// Route::get('/createoption/', 'OptionController@create');
// Route::post('/createoption/store', 'OptionController@store');

