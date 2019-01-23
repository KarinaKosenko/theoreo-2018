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

Route::get('/', 'ActionsController@index')->name('index');

Route::get('/cat/{id}', 'ActionsController@show_actions_by_category')->name('category');

Route::get('/tag/{tag_name}', 'ActionsController@show_actions_by_tag')->name('tag');

Route::get('/brand/{brand_name}', 'ActionsController@show_actions_by_brand')->name('brand');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/show', function () {
    return view('pages.actions.show');
});
