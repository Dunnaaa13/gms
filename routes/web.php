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

Route::get('/subjects', 'SubjectsController@index');
Route::get('/subjects/add', 'SubjectsController@create');
Route::post('/subjects/store', 'SubjectsController@store');
Route::get('/subjects/{subject}', 'SubjectsController@show');
Route::get('/subjects/{subject}/edit', 'SubjectsController@edit');
Route::post('/subjects/{subject}/update', 'SubjectsController@update');	