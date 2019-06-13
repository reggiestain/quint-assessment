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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/lead/create', 'LeadController@store')->name('lead.store');
Route::group(['middleware' =>'auth'], function() {
Route::get('/lead/index', 'LeadController@index')->name('lead.index');
});
//Auth routes
Auth::routes();