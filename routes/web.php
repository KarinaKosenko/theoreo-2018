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
    return view('pages.actions.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/show', function () {
    return view('pages.actions.show');
});

Route::prefix('vk')->group(function () {
    Route::get('get-wall', 'ParseController@getWall');
    Route::get('actions', 'ParseController@actions');
});