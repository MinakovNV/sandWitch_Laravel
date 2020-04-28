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

Route::get('/ourteam', function () {
    return view('pages/ourteam');
});


Route::get('/plan_change', function () {
    return view('pages/table');
});

Route::get('contacts', 'ContactFormController@create');

Route::post('contacts', 'ContactFormController@store');

Route::get('/plans/all/{id}', 'Admin\PlanController@showOnePlan')->name('plan-one');
Route::get('/plans/all', 'Admin\PlanController@allUserPlans')->name('allUserPlans');
Route::post('/plan/all/{id}/update', 'Admin\PlanController@updatePlan')->name('planUpdateSubmit');
Route::get('/plan/all/{id}/delete', 'Admin\PlanController@deleteOnePlan')->name('plan-delete');
Route::post('/plan/submit', 'User\PlanController@submit')->name('plan-form');

Route::get('/addPlan', function () {
    return view('pages/addPlan');
})->name('plan');

Auth::routes(['verify' => true]);

Route::get('profile', 'UserController@profile');

Route::post('profile', 'UserController@update_avatar');

Route::post('/profileUpdate', 'UserController@profileUpdate')->name('profileUpdate');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('pictures', 'PicturesController@index')->middleware(['auth', 'verified']);

Route::group(['as'=> 'admin.','prefix'=>'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']],
    function() {
        Route::get('dashboard', 'PlanController@index')->name('dashboard');
    }
);

Route::group(['as'=> 'user.', 'prefix'=>'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']],
    function() {
        Route::get('dashboard', 'PlanController@index')->name('dashboard');
    }
);

