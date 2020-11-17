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
    return view('frontend.homepages.index');
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

    Route::get('register', 'Auth\Admin\RegisterController@create')->name('admin.register');

    Route::post('register', 'Auth\Admin\RegisterController@store')->name('admin.register.store');

    Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');

    Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');

    Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');


    Route::get('partner/', 'Admin\PartnerController@index');
    Route::get('partner/create', 'Admin\PartnerController@create');
    Route::get('partner/{id}/edit', 'Admin\PartnerController@edit');
    Route::get('partner/{id}/delete', 'Admin\PartnerController@delete');
    Route::get('partner/search', 'Admin\PartnerController@search');

    Route::post('partner', 'Admin\PartnerController@store');
    Route::post('partner/{id}', 'Admin\PartnerController@update');
    Route::post('partner/{id}/delete', 'Admin\PartnerController@destroy');

    Route::get('scholar', 'Admin\ScholarController@index');
    Route::get('scholar/create', 'Admin\ScholarController@create');
    Route::get('scholar/{id}/edit', 'Admin\ScholarController@edit');
    Route::get('scholar/{id}/delete', 'Admin\ScholarController@delete');
    Route::get('scholar/upload', 'Admin\ScholarController@upload');
    Route::get('scholar/search', 'Admin\ScholarController@search');

    Route::post('scholar/import', 'Admin\ScholarController@import');
    Route::post('scholar', 'Admin\ScholarController@store');
    Route::post('scholar/{id}', 'Admin\ScholarController@update');
    Route::post('scholar/{id}/delete', 'Admin\ScholarController@destroy');


    Route::get('users', 'Admin\AdminManagerController@index');
    Route::get('users/create', 'Admin\AdminManagerController@create');
    Route::get('users/{id}/edit', 'Admin\AdminManagerController@edit');
    Route::get('users/{id}/delete', 'Admin\AdminManagerController@delete');

    Route::post('users', 'Admin\AdminManagerController@store');
    Route::post('users/{id}', 'Admin\AdminManagerController@update');
    Route::post('users/{id}/delete', 'Admin\AdminManagerController@destroy');

    Route::get('sendmail/partner', 'Admin\PartnerMailController@index');
    Route::get('sendmail/partner/send', 'Admin\PartnerMailController@send');
    Route::post('sendmail/partner/send/email', 'Admin\PartnerMailController@sendemail');

    Route::get('sendmail/scholar', 'Admin\ScholarMailController@index');
});
