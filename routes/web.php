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

Route::get('/', 'HomeController@index')->name('home');


//Auth
Route::get('/signup','AuthController@get_signup')->name('auth.signup')->middleware('guest');
Route::post('/signup','AuthController@post_signup')->name('auth.signup.store')->middleware('guest');

Route::get('/signin','AuthController@get_signin')->name('auth.signin')->middleware('guest');
Route::post('/signin','AuthController@post_signin')->name('auth.signin.store')->middleware('guest');

Route::get('/signout','AuthController@get_signout')->name('auth.signout');

//search
Route::get('/search','SearchController@get_results')->name('search.results');

//Profile
Route::get('/profile/{username}','ProfileController@get_profile')->name('profile.index');

