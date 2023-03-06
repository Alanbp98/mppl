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

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/reset-password', function () {
    return view('reset-password');
});

Route::get('/new-password', function () {
    return view('new-password');
});

Route::get('/two-steps', function () {
    return view('two-steps');
});

Route::get('/index', function () {
    return view('index');
});

?>