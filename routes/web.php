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


Route::get('/login', 'AuthenticationController@login');
Route::get('/register', 'AuthenticationController@register');



Route::get('/adminindex', 'AdminController@adminindex');
Route::get('/useraccounts', 'AdminController@useraccounts');
Route::get('/membershipadmin', 'AdminController@membershipadmin');
Route::get('/offer', 'AdminController@offerlist');
Route::get('/log', 'AdminController@log');
Route::get('/stocks', 'AdminController@stocks');

Route::get('/category', 'AdminController@categorylist');




Route::get('/', 'HomeController@salesindex');
Route::get('/pos', 'HomeController@pos');



Route::get('/availableitems', 'HomeController@availableitems');
Route::get('/offerlist', 'HomeController@offersales');
Route::get('/membershipsales', 'HomeController@membershipsales');

//Route::get('/about', 'PageController@about');
//Route::get('/services', 'PageController@services');