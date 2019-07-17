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

Route::get('/add', function () {
    return view('add');
});

Route::get('/register', function () {
    return view('account/register');
})->name('register');

Route::get('/login', function () {
    return view('account.login');
})->name('login');

Route::post('/doLogin', 'UserController@doLogin');

Route::post('/doRegister', 'UserController@doRegister');

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', 'UserController@index');
