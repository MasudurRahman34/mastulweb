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

//children controller routes
Route::get('/webmastul/childForm', 'backend\ChildrenController@childForm')->name('admin.childForm');
	Route::post('/webmastul/childStore', 'backend\ChildrenController@store')->name('adminchild.store');
	Route::get('/webmastul/childList', 'backend\ChildrenController@childList')->name('admin.childList');
	Route::get('/webmastul/childProfile/{slug}', 'backend\ChildrenController@childProfile')->name('admin.childProfile');
		//mainEnd
		/*child ActiveStatus*/
	Route::post('/webmastul/editActiveStatus/{id}', 'backend\ChildrenController@editActiveStatus')->name('admin.child.editActiveStatus');
		//

		/*guardian auto Add after children add*/
	Route::get('/webmastul/guirdianIndex', 'backend\ChildrenController@guirdianIndex')->name('admin.guirdianIndex');

	Route::post('/webmastul/guirdianInsert/{id}', 'backend\ChildrenController@guirdianInsert')->name('admin.guirdianInsert');

		//
		/*guardian ADD inside children profile*/
	Route::get('/webmastul/childprofile/childProfileGuardianAddIndex/{id}', 'backend\ChildrenController@childProfileGuardianAddIndex')->name('childProfile.GuardianAddIndex');

	Route::post('/webmastul/childProfileGuardianAddIndex/{id}', 'backend\ChildrenController@childProfileGuardianAdd')->name('childProfile.GuardianAdd');
		//

		/*siblings auto Add after children add*/

	Route::get('/webmastul/siblingIndex', 'backend\ChildrenController@siblingIndex')->name('admin.siblingIndex');

	Route::get('/webmastul/childprofile/siblingAddIndex/{id}', 'backend\ChildrenController@childProfileSiblingAddIndex')->name('childprofile.siblingAddIndex');
		//
		/*sibling ADD inside children profile*/
	Route::post('/webmastul/childProfileSiblingAdd/{id}', 'backend\ChildrenController@childProfileSiblingAdd')->name('childProfileSiblingAdd');

	Route::post('/webmastul/siblingInsert/{id}', 'backend\ChildrenController@siblingInsert')->name('admin.siblingInsert');

/*end children controller*/


//start sponsor controller routes
Route::get('/sponsorForm', 'backend\SponsorController@sponsorForm')->name('admin.sponsor.form');
	Route::post('/sponsorStore', 'backend\SponsorController@store')->name('admin.sponsor.store');
	Route::get('/sponsorList', 'backend\SponsorController@sponsorList')->name('admin.sponsor.list');
	Route::get('/sponsorProfile/{slug}', 'backend\SponsorController@childProfile')->name('admin.sponsorProfile');
		//mainEnd
	/*social auto Add after sponsor add*/
	Route::get('/sacialFormIndex', 'backend\SponsorController@sacialFormIndex')->name('admin.socialFormIndex');
	Route::post('sacialFormInsert/{id}', 'backend\SponsorController@sacialFormInsert')->name('admin.sacialFormInsert');

	
	//
	Route::post('paymentPrefference/{id}', 'backend\SponsorController@paymentPrefference')->name('admin.sponsor.paymentPrefference');
	
	Route::post('sponsorChild/{id}', 'backend\SponsorController@sponsorChild')->name('admin.sponsorChild');

	Route::get('/sponsorChildForm/{id}', 'backend\SponsorController@sponsorChildForm')->name('admin.sponsorChildForm');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
