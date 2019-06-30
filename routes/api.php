<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});


Route::group(['middleware' => 'jwt.auth'], function ($router) {

    Route::post('/store-contracts', 'IdentificationController@storeContract');
    Route::post('/upload/contract-image', 'IdentificationController@storeContractImage');
    Route::post('/store-identification', 'IdentificationController@storeIdentification');
    Route::post('/upload/identification-image', 'IdentificationController@storeIdentificationImage');
});
