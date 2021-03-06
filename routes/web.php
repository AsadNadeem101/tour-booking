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
    return view('web.homepage');
});
Route::get('/customize', function () {
    return view('web.customizedTrip');
});
Route::get('/customize2', function () {
    return view('web.customizedTrip2');
});
Route::get('/aboutus', function () {
    return view('web.aboutus');
});
Route::get('/contactus', function () {
    return view('web.contactus');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
