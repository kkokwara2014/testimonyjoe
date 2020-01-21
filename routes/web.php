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
    Route::get('/testimonyjoe', 'FrontendController@abouttestimonyjoe')->name('abouttestimonyjoe');
    Route::get('/holyghoststudio', 'FrontendController@aboutholyghoststudio')->name('aboutholyghoststudio');
    Route::get('/equipment/rentals', 'FrontendController@aboutrentals')->name('aboutrentals');
});

Route::get('contact', 'FrontendController@contact')->name('contact');
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

    Route::resource('album', 'AlbumController');
    Route::resource('booking', 'BookingController');
    Route::resource('category', 'CategoryController');
    Route::get('all/contacts', 'ContactController@getAllContacts')->name('contact.index');
    Route::post('delete/{id}/contact', 'ContactController@removeContact')->name('contact.destroy');
    Route::resource('event', 'EventController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('equipment', 'EquipmentController');

    Route::get('all/admins', 'AdminController@admins')->name('all.admin');
    Route::get('admins/{id}/show', 'AdminController@show')->name('admins.show');
    Route::post('admins/{id}/activate', 'AdminController@activate')->name('admins.activate');
    Route::post('admins/{id}/deactivate', 'AdminController@deactivate')->name('admins.deactivate');

    // Route::get('contact','ContactController@index')->name('contact.index');
    // Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');

    Route::get('user/profile', 'UserController@profileimage')->name('user.profile');
    Route::post('user/profile', 'UserController@updateprofileimage')->name('user.profile.update');
});
