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

Route::get('/', 'Auth\AuthController@login')->name('login');
Route::get('register', 'Auth\AuthController@register')->name('register');
Route::post('register-store', 'Auth\AuthController@registerStore')->name('register_store');
Route::post('login-post', 'Auth\AuthController@loginPost')->name('login_post');
Route::get('success', 'Auth\AuthController@success')->name('success');
