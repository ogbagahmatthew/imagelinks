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

Auth::routes();

Route::get('homepages', 'StaticpagesController@homepages');
Route::get('about', 'StaticpagesController@about');
Route::get('contact', 'StaticpagesController@contact');
Route::get('gallery', 'StaticpagesController@gallery');
Route::get('bookings', 'StaticpagesController@booking');
Route::get('icons', 'StaticpagesController@icons');
Route::get('typography', 'StaticpagesController@typography');

Route::resource('flights', 'FlightsController'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
