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


Route::get('/index', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

// Route::get('/master', function () {
//     return view('layout.master');
// });

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/forms', function () {
    return view('form');
});

Route::get('/icon', function () {
    return view('icon');
});

//AdminMonster

Route::get('/signin', function () {
    return view('adminMonster.signin');
});
