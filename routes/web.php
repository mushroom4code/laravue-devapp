<?php

use Illuminate\Support\Facades\Storage as Storage;

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

Route::get('/', 'ListingController@get_home_web');

Route::get('/listing/{listing}', 'ListingController@get_listing_web');

Route::get('/saved', 'ListingController@get_home_web')->middleware('auth');

Route::get('/listing_create', 'ListingController@get_listing_create_web')->middleware('auth');

Route::post('/listing_create', 'ListingController@post_listing_create_web');

Auth::routes();
