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
})->name('welcome');

Route::get('/identification/download/{id}', 'HomeController@identificationDownload');
Route::get('/contract/download/{id}', 'HomeController@contractDownload');

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{id}','HomeController@showIdentification');
Route::get('/contracts','HomeController@contracts');
Route::get('/contracts/{id}','HomeController@showContract');

Route::group(['prefix' => 'admin', 'middleware'=>['auth', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::get('/identification/{id}','HomeController@showIdentification');
    Route::get('/contracts','HomeController@contracts')->name('admin.contracts');
    Route::get('/contracts/{id}','HomeController@showContract');

    Route::get('/register-supervisor', 'HomeController@showForm')->name('supervisor.create');
    Route::post('/register-supervisors', 'HomeController@create')->name('register.supervisor');
    Route::get('/supervisors', 'HomeController@showSupervisors')->name('supervisors');
    Route::post('/delete-supervisor', 'HomeController@deleteSupervisor')->name('supervisor.delete');


});


Route::group(['prefix'=>'supervisor','middleware'=>['auth', 'supervisor']], function(){
    Route::get('/', 'SupervisorController@index')->name('supervisor.home');
    Route::get('/register-agent', 'SupervisorController@showForm')->name('create.agent');
    Route::post('/register-agent', 'SupervisorController@create')->name('register.agent');
    Route::get('/agents', 'SupervisorController@showAgents')->name('agents');
    Route::post('/delete-agent', 'SupervisorController@deleteAgent')->name('agent.delete');

    Route::get('/identification/{id}','SupervisorController@showIdentification');
    Route::get('/contracts','SupervisorController@contracts')->name('supervisor.contracts');
    Route::get('/contracts/{id}','SupervisorController@showContract');
});

