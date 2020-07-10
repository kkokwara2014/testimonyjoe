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

// Route::get('/', function () {
//     return view('welcome');
// });

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');


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

Route::get('contact/us', 'SendMessageController@contactus')->name('contactus');
Route::post('contact/us', 'SendMessageController@savecontact')->name('save.contact');

Route::get('gallery', 'FrontendController@gallery')->name('gallery');
Route::get('event', 'FrontendController@event')->name('event');
Route::get('album', 'FrontendController@album')->name('album');

Route::get('bookings', 'FrontendController@booking')->name('bookings');
Route::post('bookings/save', 'FrontendController@savebooking')->name('save.bookings');



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/', 'AdminController@index')->name('dashboard.index');
    Route::resource('admin','AdminController');

    // for booking


    //for contacts


    //for Events


    //for Gallery


    //for Equipment

    Route::get('user/profile', 'UserController@profileimage')->name('user.profile');
    Route::post('user/profile', 'UserController@updateprofileimage')->name('user.profile.update');
});
