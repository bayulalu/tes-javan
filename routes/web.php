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
Route::get('/create', 'BiodataController@create')->name('biodata.create');
Route::get('/delete/{id}', 'BiodataController@delete')->name('biodata.delete');
Route::get('/edit/{id}', 'BiodataController@edit')->name('biodata.edit');
Route::post('/edit/{id}', 'BiodataController@update')->name('biodata.edit');


Route::post('/create', 'BiodataController@store')->name('biodata.create');


 Route::get('/', 'BiodataController@index')->name('biodata');

