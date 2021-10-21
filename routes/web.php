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
    return view('welcome');
});

Route::grope(['prefix' => 'admin'], function() {
    route::get('news/create','Admin\NewsController@add');
});


Route::get('XXX',
`XXX\AAA@bbb`);

Route::grope(['prefix' => 'admin'],function() {
    route::get('profile/create','Admin\ProfileController@add');
    route::get('profile/edit','Admin\ProfileController@edit');
    });