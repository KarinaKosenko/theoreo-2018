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
    return view('layouts.main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('vk')->group(function () {
    Route::get('auth', 'ParseController@vkAuthorize');
    Route::get('token', 'ParseController@saveToken');
    Route::get('get-wall', 'ParseController@getWall');

});