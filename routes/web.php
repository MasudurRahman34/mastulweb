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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/msadmin', 'backend\adminpage@index')->name('msadmin');
Route::post('/ms/logout', 'auth\LoginController@adminlogout')->name('admin.lgout');

//children controller routes
Route::get('/childForm', 'backend\ChildrenController@childForm')->name('admin.childForm');
	Route::post('/childStore', 'backend\ChildrenController@store')->name('adminchild.store');
	Route::get('/childList', 'backend\ChildrenController@childList')->name('admin.childList');
	Route::get('/DonatorchildList', 'backend\ChildrenController@donatorChildList')->name('admin.donatordchild.list');
	Route::get('/childProfile/{slug}', 'backend\ChildrenController@childProfile')->name('admin.childProfile');
		//mainEnd
		/*child ActiveStatus*/
	Route::post('/editActiveStatus/{id}', 'backend\ChildrenController@editActiveStatus')->name('admin.child.editActiveStatus');
	Route::get('/previewStatus/{id}', 'backend\ChildrenController@previewStatus')->name('admin.child.preview');
	Route::post('/previewActive/{id}', 'backend\ChildrenController@previewActive')->name('admin.child.previewActive');
	Route::post('/admin.child.imageStaus/{id}', 'backend\ChildrenController@imageStaus')->name('admin.child.imageStaus');
	Route::post('/admin.child.videoStaus/{id}', 'backend\ChildrenController@videoStaus')->name('admin.child.videoStaus');
		//

		/*guardian auto Add after children add*/
	Route::get('/guirdianIndex', 'backend\ChildrenController@guirdianIndex')->name('admin.guirdianIndex');

	Route::post('/guirdianInsert/{id}', 'backend\ChildrenController@guirdianInsert')->name('admin.guirdianInsert');

		//
		/*guardian ADD inside children profile*/
	Route::get('/childprofile/childProfileGuardianAddIndex/{id}', 'backend\ChildrenController@childProfileGuardianAddIndex')->name('childProfile.GuardianAddIndex');

	Route::post('/childProfileGuardianAddIndex/{id}', 'backend\ChildrenController@childProfileGuardianAdd')->name('childProfile.GuardianAdd');
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
	Route::get('/sponsorList', 'backend\SponsorController@sponsorList')->name('admin.sponsorList');
	Route::get('/sponsorProfile/{slug}', 'backend\SponsorController@sponsorProfile')->name('admin.sponsorProfile');
		//mainEnd
	/*social auto Add after sponsor add*/
	Route::get('/sacialFormIndex', 'backend\SponsorController@sacialFormIndex')->name('admin.socialFormIndex');
	Route::post('sacialFormInsert/{id}', 'backend\SponsorController@sacialFormInsert')->name('admin.sacialFormInsert');

	
	//payment
	Route::post('sponsor/monthlyPayment/{id}', 'backend\SponsorController@monthlyPayment')->name('admin.sponsor.monthlyPayment');
	Route::post('payment/{id}', 'backend\SponsorController@payment')->name('admin.sponsor.payment');
	
	Route::post('sponsorChild/{id}', 'backend\SponsorController@sponsorChild')->name('admin.sponsorChild');

	Route::get('/sponsorChildForm/{id}', 'backend\SponsorController@sponsorChildForm')->name('admin.sponsorChildForm');

	//report
	Route::get('/monthlyPay', 'monthlyPaymentController@index')->name('admin.monthlypay');
	Route::get('/individualPay/{id}', 'monthlyPaymentController@show')->name('admin.individualPay');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//frontend
Route::get('/index11', 'frontController@index')->name('index11');

Route::get('/contact', 'frontController@contact_us')->name('contactus');

Route::get('/design', 'frontController@design_principle')->name('design_principle');

Route::get('/members', 'frontController@members')->name('members');
Route::get('/aboutus', 'frontController@aboutus')->name('aboutus');
Route::get('/donation_details', 'frontController@donation_details')->name('donation_details');

//sponsor route
Route::get('/sponsor-a-child', 'frontController@childGrid')->name('childGrid');
Route::get('/singleChild', 'frontController@singleChild')->name('singleChild');
//project
Route::get('/projectGrid', 'frontController@projectGrid')->name('projectGrid');
Route::get('/singleProject', 'frontController@singleProject')->name('singleProject');
//cash process

// eventGrid
Route::get('/eventGrid', 'frontController@eventGrid')->name('eventGrid');
Route::get('/singleEvent', 'frontController@singleEvent')->name('singleEvent');
//

Route::get('/checkout', 'frontController@checkout')->name('Checkout');



