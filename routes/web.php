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




Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/', function () {
        return view('front.home');
    });

    Route::get('/contact', function () {
        return view('front.contact');
    });

    Route::get('/clients', function () {
        return view('front.clients');
    });

    Route::get('/order', function () {
        return view('front.order');
    });
});