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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * route admin
 *
 */

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    Route::get('register', 'AdminController@create')->name('admin.register');

    Route::post('register', 'AdminController@store')->name('admin.register.store');

    Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');

    Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');

    Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');


    Route::get('partner/delegate', 'Admin\PartnerDelegateController@index');
    Route::get('partner/delegate/create', 'Admin\PartnerDelegateController@create');
    Route::get('partner/delegate/{id}/edit', 'Admin\PartnerDelegateController@edit');
    Route::get('partner/delegate/{id}/delete', 'Admin\PartnerDelegateController@delete');

    Route::post('partner/delegate', 'Admin\PartnerDelegateController@store');
    Route::post('partner/delegate/{id}', 'Admin\PartnerDelegateController@update');
    Route::post('partner/delegate/{id}/delete', 'Admin\PartnerDelegateController@destroy');

    Route::get('partner/company', 'Admin\PartnerCompanyController@index');
    Route::get('partner/company/create', 'Admin\PartnerCompanyController@create');
    Route::get('partner/company/{id}/edit', 'Admin\PartnerCompanyController@edit');
    Route::get('partner/company/{id}/delete', 'Admin\PartnerCompanyController@delete');

    Route::post('partner/company', 'Admin\PartnerCompanyController@store');
    Route::post('partner/company/{id}', 'Admin\PartnerCompanyController@update');
    Route::post('partner/company/{id}/delete', 'Admin\PartnerCompanyController@destroy');


    Route::get('scholar', 'Admin\ScholarController@index');
    Route::get('scholar/create', 'Admin\ScholarController@create');
    Route::get('scholar/{id}/edit', 'Admin\ScholarController@edit');
    Route::get('scholar/{id}/delete', 'Admin\ScholarController@delete');

    Route::post('scholar', 'Admin\ScholarController@store');
    Route::post('scholar/{id}', 'Admin\ScholarController@update');
    Route::post('scholar/{id}/delete', 'Admin\ScholarController@destroy');


    /*Route::get('users', 'Admin\AdminManagerController@index');
    Route::get('users/create', 'Admin\AdminManagerController@create');
    Route::get('users/{id}/edit', 'Admin\AdminManagerController@edit');
    Route::get('users/{id}/delete', 'Admin\AdminManagerController@delete');

    Route::post('users', 'Admin\AdminManagerController@store');
    Route::post('users/{id}', 'Admin\AdminManagerController@update');
    Route::post('users/{id}/delete', 'Admin\AdminManagerController@destroy');*/
});
