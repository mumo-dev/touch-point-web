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
Route::get('/home/{id}','HomeController@showIdentification');
Route::get('/contracts','HomeController@contracts');
Route::get('/contracts/{id}','HomeController@showContract');

Route::get('/register-agent', 'AdminController@showForm');
Route::post('/register-agent', 'AdminController@create');
