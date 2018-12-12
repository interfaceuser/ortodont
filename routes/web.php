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

Route::get('/', 'mainController@index');
Route::post('/request/vizit', 'mainController@vizitRequest');
Route::post('/request/callback', 'mainController@callbackRequest');