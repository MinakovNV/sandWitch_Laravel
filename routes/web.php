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

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/about', function () {
    return view('pages/about');
});

<<<<<<< HEAD
============
Route::get('/ourteam', function () {
    return view('pages/ourteam');
});

Route::get('/contacts', function () {
    return view('pages/contacts');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/reg', function () {
    return view('pages/reg');
});

>>>>>>> cbf47c03bc0a33845342db5f8ec5d825a537a469
Auth::routes(['verify' => true]);

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
Route::post('/profileUpdate', 'UserController@profileUpdate')->name('profileUpdate');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('pictures', 'PicturesController@index')->middleware(['auth', 'verified']);

Route::group(['as'=> 'admin.','prefix'=>'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']],
    function() {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    }
);

Route::group(['as'=> 'user.', 'prefix'=>'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']],
    function() {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    }
);

