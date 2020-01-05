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
Route::get('/', 'FrontendController@index')->name('index');

Route::prefix('/about')->group(function () {
    Route::get('/testimonyjoe', 'FrontendController@abouttestimonyjoe')->name('abouttestimonyjoe');
    Route::get('/holyghoststudio', 'FrontendController@aboutholyghoststudio')->name('aboutholyghoststudio');
    Route::get('/equipment/rentals', 'FrontendController@aboutrentals')->name('aboutrentals');
});

Route::get('contact', 'FrontendController@contact')->name('contact');
Route::get('gallery', 'FrontendController@gallery')->name('gallery');
Route::get('event', 'FrontendController@event')->name('event');
Route::get('album', 'FrontendController@album')->name('album');
Route::get('booking', 'FrontendController@booking')->name('booking');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
