<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes(['login' => false]);


Route::get('/', 'FrontController@index')->name('home');
Route::get('/login', 'User/LoginController@login');
Route::get('/signup', 'FrontController@signup')->name('signup');
Route::post('/create-store', 'FrontController@createStore')->name('create.store');
Route::get('/user-details', 'FrontController@userDetails')->name('user.details');
Route::post('/details-store', 'FrontController@storeUserDet')->name('store.user_details');
Route::get('/user-domain-details', 'FrontController@userDomainDetails')->name('user.domain.details');
Route::post('/store-domain-details', 'FrontController@storeDomainDetails')->name('store.domain.details');
Route::get('/select-package', 'FrontController@selectPackage')->name('select.package');
Route::get('/successfull/{id}', 'FrontController@userFullDetails')->name('databse.migration');
Route::get('/user-autologin', 'FrontController@autologin')->name('user.autologin');
Route::get('/signin', 'FrontController@signin')->name('signin');
Route::post('/checklogin', 'FrontController@checkLogin')->name('check.login');
Route::post('/get-state', 'FrontController@getState')->name('get.state');
Route::post('/get-city', 'FrontController@getCity')->name('get.city');

Route::group(['namespace'=>'Admin', 'prefix'=>'admin'],function(){
	Route::get('/login', 'LoginController@login')->name('login');
	Route::post('/checklogin', 'LoginController@checkLogin')->name('admin.checklogin');
});
Route::group(['namespace'=>'User', 'prefix'=>'user'],function(){
	Route::get('/login', 'LoginController@login')->name('login');
	Route::post('/checklogin', 'LoginController@checkLogin')->name('checklogin');
	Route::get('/autologin', 'LoginController@autologin');
});
/////////////////////////////////////////////////////////////////
Route::group(['namespace'=>'User' ,'prefix' => 'user','middleware' => ['auth','user']], function() {
Route::get('/dashboard', 'DashboardController@index')->name('user.dashboard');
Route::get('/profile', 'DashboardController@profile')->name('user.profile');
Route::post('/update-profile', 'DashboardController@profileUpdate')->name('user.update.profile');
Route::get('/logout', 'DashboardController@logout')->name('user.logout');

Route::get('/my-package', 'PackageController@myPackage')->name('user.my.package');
Route::get('/buy-addons/{id}/{us_pack}/{user_id}', 'PackageController@buyAddons')->name('buy.addons');
Route::get('/add-addons/{id}/{us_pack}/{user_id}/{order_id}', 'PackageController@addAddons')->name('add.addons');

Route::post('/renew-package-order/{pack_id}', 'PackageController@renewPackageOrder')->name('renew.package');
Route::get('/renew-package/{pack_id}/{p_type}/{order_id}', 'PackageController@addRenewal')->name('add.renewal');

Route::get('/upgrade-package', 'PackageController@upgradePackage')->name('upgrade.package');
Route::get('/update-package-order/{pack_id}', 'PackageController@updatePackageOrder')->name('upgrade.your.package');
Route::post('/update-package', 'PackageController@updatePackage')->name('update.package');
////////////////////////
Route::get('/payment-history', 'UserController@paymentList')->name('user.payment.history');
Route::get('/payment-history/delete/{id}', 'UserController@paymentListDelete')->name('user.paymenthistory.delete');

//////////////////////////////////////
Route::get('/app', 'UserController@app')->name('app.make');
Route::post('/save-app', 'UserController@saveApp')->name('save.app.details');

Route::get('/active-pos', 'UserController@activePos')->name('active.pos');
Route::get('/active-pos-statuschange/{order_id}', 'UserController@posStatusChange')->name('pos.status.change');

Route::get('/domain-config', 'DomainController@index')->name('domain.config');
});

Route::group(['namespace'=>'Admin' ,'prefix' => 'admin','middleware' => ['auth','admin']], function() {
Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
Route::get('/profile', 'DashboardController@profile')->name('admin.profile');
Route::post('/update-profile', 'DashboardController@profileUpdate')->name('admin.update.profile');
Route::get('/logout', 'DashboardController@logout')->name('admin.logout');
////////////////////////
Route::get('/package', 'PackageController@index')->name('admin.package');
Route::post('/package/add', 'PackageController@add')->name('admin.package.add');
Route::post('/package/edit/{id}', 'PackageController@edit')->name('admin.package.edit');
Route::get('/package/delete/{id}', 'PackageController@delete')->name('admin.package.delete');
Route::get('/package/buyer/{id}', 'PackageController@buyer')->name('admin.package.buyer');
Route::get('/package/buyer/delete/{id}/{package_id}', 'PackageController@buyerDelete')->name('admin.package.buyerdelete');
Route::post('/package/buyer/add/{id}', 'PackageController@buyerAdd')->name('admin.package.buyer.add');

Route::get('/addons', 'AddonsController@index')->name('admin.addons');
Route::post('/addons/add', 'AddonsController@add')->name('admin.addons.add');
Route::post('/addons/edit/{id}', 'AddonsController@edit')->name('admin.addons.edit');
Route::get('/addons/delete/{id}', 'AddonsController@delete')->name('admin.addons.delete');

////////////////////////
Route::get('/user-registration', 'UserController@regList')->name('admin.user.registration');
Route::get('/user-registration/add', 'UserController@add')->name('admin.user.registration.add');
Route::post('/user-registration/insert', 'UserController@addRegistration')->name('admin.user.registration.insert');
Route::get('/user-registration/delete/{id}', 'UserController@regListDelete')->name('admin.userregister.delete');

Route::get('/user-payment-history', 'UserController@paymentList')->name('admin.user.payment.history');
Route::get('/user-payment-history/delete/{id}', 'UserController@paymentListDelete')->name('admin.user.paymenthistory.delete');
////////////////////
Route::get('/user-app-request', 'UserController@appRequest')->name('admin.app.request');
Route::post('/user-app-upload/{id}', 'UserController@appUpload')->name('app.upload');
});
Route::get('/logout', 'Admin\DashboardController@logout')->name('logout');
Route::get('/status-change', 'Admin\DashboardController@statusChange')->name('status.change');
Auth::routes();
Route::get('/home', 'HomeController@index');
