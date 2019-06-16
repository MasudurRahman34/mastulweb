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
Route::get('/webmastul/childForm', 'backend\ChildrenController@childForm')->name('admin.childForm');
Route::post('/webmastul/childStore', 'backend\ChildrenController@store')->name('adminchild.store');
Route::post('/webmastul/editActiveStatus/{id}', 'backend\ChildrenController@editActiveStatus')->name('admin.child.editActiveStatus');

Route::get('/webmastul/guirdianIndex', 'backend\ChildrenController@guirdianIndex')->name('admin.guirdianIndex');
Route::post('/webmastul/guirdianInsert/{id}', 'backend\ChildrenController@guirdianInsert')->name('admin.guirdianInsert');

Route::get('/webmastul/childprofile/childProfileGuardianAddIndex/{id}', 'backend\ChildrenController@childProfileGuardianAddIndex')->name('childProfile.GuardianAddIndex');
Route::post('/webmastul/childProfileGuardianAddIndex/{id}', 'backend\ChildrenController@childProfileGuardianAdd')->name('childProfile.GuardianAdd');

Route::get('/webmastul/siblingIndex', 'backend\ChildrenController@siblingIndex')->name('admin.siblingIndex');

Route::get('/webmastul/childprofile/siblingAddIndex/{id}', 'backend\ChildrenController@childProfileSiblingAddIndex')->name('childprofile.siblingAddIndex');
Route::post('/webmastul/childProfileSiblingAdd/{id}', 'backend\ChildrenController@childProfileSiblingAdd')->name('childProfileSiblingAdd');

Route::post('/webmastul/siblingInsert/{id}', 'backend\ChildrenController@siblingInsert')->name('admin.siblingInsert');

Route::get('/webmastul/childProfile/{slug}', 'backend\ChildrenController@childProfile')->name('admin.childProfile');
Route::get('/webmastul/childList', 'backend\ChildrenController@childList')->name('admin.childList');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
