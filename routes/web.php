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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', function () {
    return view('auth.admin.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');

Route::name('admin.')->group(function () {
    Route::namespace('AuthAdmin')->group(function () {
        Route::get('/admin/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/admin/login', 'LoginController@loginAdmin')->name('loginSubmit');
        Route::post('/admin/logout', 'LoginController@logout')->name('logout');
    });

    Route::namespace('Admin')->group(function () {
        Route::get('/admin', 'AdminController@index')->name('home');
    });
});
