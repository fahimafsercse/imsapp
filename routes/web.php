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
Auth::routes();


Route::get('/','AuthenticationController@login');




Route::get('/adminindex', 'AdminController@adminindex');



Route::get('/accounts', 'AdminController@accounts')->name('accounts');
Route::get('/accounts/create', 'AdminController@createaccount')->name('createaccount');
Route::post('/accounts/create', 'AdminController@accountstore');
Route::get('/accounts/edit/{id}', 'AdminController@editaccount')->name('editaccount');
Route::get('/accounts/delete/{id}', 'AdminController@deleteaccount')->name('deleteaccount');
Route::post('/accounts/delete/{id}', 'AdminController@destroyaccount');
Route::post('/accounts/edit/{id}', 'AdminController@updateaccount');


Route::get('/offers', 'AdminController@offers')->name('offers');
Route::get('/offers/create', 'AdminController@createoffer')->name('createoffer');
Route::post('/offers/create', 'AdminController@offerstore');
Route::get('/offers/edit/{id}', 'AdminController@editoffer')->name('editoffer');
Route::get('/offers/delete/{id}', 'AdminController@deleteoffer')->name('deleteoffer');
Route::post('/offers/delete/{id}', 'AdminController@destroyoffer');
Route::post('/offers/edit/{id}', 'AdminController@updateoffer');





Route::get('/membershipadmin', 'AdminController@membershipadmin');
Route::get('/offer', 'AdminController@offerlist');
Route::get('/log', 'AdminController@log');
Route::get('/stocks', 'AdminController@stocks');

Route::get('/category', 'AdminController@categorylist');




Route::post('/membershipsales/edit/{id}', 'HomeController@memberupdate');
Route::get('/pos', 'HomeController@pos');
Route::get('/salesindex', 'HomeController@salesindex');



Route::get('/availableitems', 'HomeController@availableitems');
Route::get('/offerlist', 'HomeController@offersales');
Route::get('/membershipsales', 'HomeController@membershipsales');

//Route::get('/about', 'PageController@about');
//Route::get('/services', 'PageController@services');