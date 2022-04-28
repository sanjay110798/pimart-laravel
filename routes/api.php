<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Api'], function () {
    Route::get('/clear-cache', function() {
        $exitCode = Artisan::call('config:cache');
        return 'DONE'; //Return anything
    });
 Route::get('package', 'PackageController@index');
 Route::get('register-details', 'PackageController@registerDetails');
 Route::get('update-register-details', 'PackageController@UpdateregisterDetails');
 });   
