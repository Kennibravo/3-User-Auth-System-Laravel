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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('user.dashboard');


//Leaser Routes
Route::prefix('leaser')->group(function(){
	Route::get('login', 'Auth\LeaserLoginController@login')->name('leaser.auth.login');
	Route::post('login', 'Auth\LeaserLoginController@loginLeaser')->name('leaser.login');
	Route::post('logout', 'Auth\LeaserLoginController@logout')->name('leaser.auth.logout');
	Route::get('dashboard', 'LeaserController@getDashboard')->name('leaser.dashboard');
});


//Roomer Routes
Route::prefix('roomer')->group(function(){
	Route::get('login', 'Auth\RoomerLoginController@login')->name('roomer.auth.login');
	Route::post('login', 'Auth\RoomerLoginController@loginRoomer')->name('roomer.login');
	Route::post('logout', 'Auth\RoomerLoginController@logout')->name('roomer.auth.logout');
	Route::get('dashboard', 'RoomerController@getDashboard')->name('roomer.dashboard');
});
