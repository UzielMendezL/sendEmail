<?php

use Illuminate\Support\Facades\Route;
// Home
Route::get('/', 'App\Http\Controllers\SendEmailController@index')->name('home');
Route::get('/sendEmail', 'App\Http\Controllers\EmailSuccessController@index')->name('sendComplete');