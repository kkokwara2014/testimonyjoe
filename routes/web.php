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


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/', 'AdminController@index')->name('dashboard.index');
    Route::resource('admin','AdminController');

    Route::resource('category', 'CategoryController');
    Route::resource('equipment', 'EquipmentController');
    // Route::('contact', 'ContactController');getget
    
    Route::get('all/admins', 'AdminController@admins')->name('all.admin');
    Route::get('admins/{id}/show', 'AdminController@show')->name('admins.show');
    Route::post('admins/{id}/activate', 'AdminController@activate')->name('admins.activate');
    Route::post('admins/{id}/deactivate', 'AdminController@deactivate')->name('admins.deactivate');

    // Route::get('contact','ContactController@index')->name('contact.index');
    // Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');

    Route::get('user/profile', 'UserController@profileimage')->name('user.profile');
    Route::post('user/profile', 'UserController@updateprofileimage')->name('user.profile.update');
});
