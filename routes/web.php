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
Route::get('/webmastul/admin', 'backend\adminpage@index')->name('webmastul/admin');
Route::get('/webmastul/childForm', 'backend\adminpage@childForm')->name('webmastul/childForm');
Route::get('/webmastul/childProfile', 'backend\adminpage@childProfile')->name('webmastul/childProfile');
Route::get('/webmastul/childList', 'backend\adminpage@childList')->name('webmastul/childList');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
