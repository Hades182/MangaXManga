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

Route::get('/', 'UserController@home')->name('home');

Route::get('/login','UserController@login')->name('home.login');

Route::get('/register','UserController@register')->name('home.register');

Route::get('/questions','UserController@question')->name('home.question');

Route::get('/xiu','UserController@tarea');

