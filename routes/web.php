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

Route::get('/', ['as' => 'home', 'uses' =>'PagesController@index']);
Route::get('/topup', ['as' => 'topup', 'uses' =>'TopUpController@index']);
Route::post('/topup', ['as' => 'save-top-up', 'uses' =>'TopUpController@store']);

Auth::routes();

