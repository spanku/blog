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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/', 'login');
Route::get('login', 'AuthenticationController@login');
Route::get('register', 'AuthenticationController@register');
Route::post('register/user', 'AuthenticationController@userRegister');
Route::post('login/user', 'AuthenticationController@userLogin');
Route::get('dashboard', 'AuthenticationController@dashboard');
Route::get('logout', 'AuthenticationController@logout');
Route::get('redirect', 'SocialFacebookAuthController@redirect');
Route::get('callback', 'SocialFacebookAuthController@callback');
