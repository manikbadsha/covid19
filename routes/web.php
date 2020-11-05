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
    return view('/home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/input','HomeController@userInput');

Route::post('user/next/input','HomeController@userNextInput');
Route::post('user/next/second/input','HomeController@NextInput');
Route::post('user/final/input','HomeController@finalInput');
Route::get('output/negative', function () {
    return view('negative');
});