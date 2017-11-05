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

//Creating routos to either the input page and the page that will display the information
Route::get('/', ['uses' => 'GithubController@index', 'as' => 'index']);
Route::post('/listinfo', ['uses' => 'GithubController@info', 'as' => 'info']);