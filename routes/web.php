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
    // return view('app');
    return view('home');
});
Route::get('competition/{id}', 'compController@view');
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@do_login');
Route::get('logout', 'LoginController@do_logout');
