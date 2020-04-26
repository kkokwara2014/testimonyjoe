<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Authentication Routes...
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/', 'FrontendController@index')->name('index');

Route::prefix('/about')->group(function () {
    Route::get('/testimonyjoe', 'AboutController@testimonyjoe')->name('abouttestimonyjoe');
    Route::get('/holyghoststudio', 'AboutController@holyghoststudio')->name('aboutholyghoststudio');
    Route::get('/equipment/rentals', 'AboutController@rental')->name('aboutrental');
});

Route::get('contact', 'FrontendController@contact')->name('contactus');
Route::post('save/contact', 'ContactController@saveContact')->name('save.contact');
Route::get('gallery', 'FrontendController@gallery')->name('gallery');
Route::get('event', 'FrontendController@event')->name('event');
Route::get('album', 'FrontendController@album')->name('album');
Route::get('booking', 'FrontendController@booking')->name('booking');
Route::post('save/booking', 'BookingController@saveBooking')->name('save.booking');


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/', 'AdminController@index')->name('dashboard.index');
    Route::resource('admin','AdminController');

    // Route::get('register/admin', 'Auth\RegisterController@showRegistrationForm')->name('register.admin');

    //for album
    Route::get('all/album', 'AlbumController@index')->name('album.index');
    Route::post('save/album', 'AlbumController@store')->name('album.store');
    Route::post('show/{id}/album', 'AlbumController@show')->name('album.show');
    Route::get('edit/{id}/album', 'AlbumController@edit')->name('album.edit');
    Route::post('update/{id}/album', 'AlbumController@update')->name('album.update');
    Route::post('delete/{id}/album', 'AlbumController@destroy')->name('album.destroy');

    // for booking
    Route::get('all/bookings', 'BookingController@index')->name('booking.index');
    Route::post('delete/{id}/booking', 'BookingController@destroy')->name('booking.destroy');


    //for contacts
    Route::get('all/contacts', 'ContactController@getAllContacts')->name('contact.index');
    Route::post('delete/{id}/contact', 'ContactController@removeContact')->name('contact.destroy');

    //for Events
    Route::get('all/events', 'EventController@index')->name('event.index');
    Route::post('save/event', 'EventController@store')->name('event.store');
    Route::post('delete/{id}/event', 'EventController@destroy')->name('event.destroy');

    //for Gallery
    Route::get('all/gallery', 'GalleryController@index')->name('gallery.index');
    Route::post('save/gallery', 'GalleryController@store')->name('gallery.store');
    Route::post('show/{id}/gallery', 'GalleryController@show')->name('gallery.show');
    Route::get('edit/{id}/gallery', 'GalleryController@edit')->name('gallery.edit');
    Route::post('update/{id}/gallery', 'GalleryController@update')->name('gallery.update');
    Route::post('delete/{id}/gallery', 'GalleryController@destroy')->name('gallery.destroy');

    //for Equipment
    Route::get('all/equipment', 'EquipmentController@index')->name('equipment.index');
    Route::post('save/equipment', 'EquipmentController@store')->name('equipment.store');
    Route::post('show/{id}/equipment', 'EquipmentController@show')->name('equipment.show');
    Route::get('edit/{id}/equipment', 'EquipmentController@edit')->name('equipment.edit');
    Route::post('update/{id}/equipment', 'EquipmentController@update')->name('equipment.update');
    Route::post('delete/{id}/equipment', 'EquipmentController@destroy')->name('equipment.destroy');

    //for Admins
    Route::get('all/admins', 'AdminController@admins')->name('all.admin');
    Route::get('admins/{id}/show', 'AdminController@show')->name('admins.show');
    Route::post('admins/{id}/activate', 'AdminController@activate')->name('admins.activate');
    Route::post('admins/{id}/deactivate', 'AdminController@deactivate')->name('admins.deactivate');

    // Route::get('contact','ContactController@index')->name('contact.index');
    // Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');

    Route::get('user/profile', 'UserController@profileimage')->name('user.profile');
    Route::post('user/profile', 'UserController@updateprofileimage')->name('user.profile.update');
});
