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
Route::get('/', 'HomeController@salesindex');
Route::get('/register', 'HomeController@register');
//Route::get('/about', 'PageController@about');
//Route::get('/services', 'PageController@services');