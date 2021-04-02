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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/new','NewPageController@new');
Route::get('/','NewPageController@index');
Route::get('/show/{id}','NewPageController@show');

Route::post('/','NewPageController@store');
