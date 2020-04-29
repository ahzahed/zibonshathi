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
/*===== Frontend Part ====*/

Route::get('/', 'HomePageController@homeIndex');


/*===== Backend Part =====*/
Route::get('/admin', 'AdminController@homeIndex');
Route::get('/visitor', 'VisitorController@visitorIndex');

Auth::routes();

Route::get('/profile', 'ProfileViewController@index')->name('profile');
