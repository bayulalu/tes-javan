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

Route::group(['middleware' => 'api'], function ($router){
    Route::post('store', 'ApiBiodataController@store');
    Route::post('delete', 'ApiBiodataController@delete');
    Route::get('biodata/{id}', 'ApiBiodataController@show');
    Route::post('update/{id}', 'ApiBiodataController@update');

    
    Route::get('/', 'ApiBiodataController@index');


});
