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

Route::group (
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

	Route::get('/', function () {
        return view('layouts.site');
    })->name('homepage');

    Route::get('/Register', function () {
        return view('layouts.register');
    })->name('Register');

    Route::get('/Perfume', function () {
        return view('layouts.perfume');
    })->name('Perfume');

    Route::get('/package', function () {
        return view('layouts.package');
    })->name('package');

    Route::get('/MerchantServices', function () {
        return view('layouts.MerchantServices');
    })->name('MerchantServices'); 

    Route::get('/manufacturing', function () {
        return view('layouts.manufacturing');
    })->name('manufacturing'); 

    Route::get('/education', function () {
        return view('layouts.education');
    })->name('education'); 


    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});