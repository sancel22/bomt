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
Route::get('/dashboard', 'PagesController@dashboard');
Route::post('/confirm', 'PagesController@confirm')->name('confirm-send-money-info');
Route::post('/store', 'PagesController@store')->name('save-send-money-info');

Auth::routes();

