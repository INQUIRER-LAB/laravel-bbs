<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', "App\Http\Controllers\BbsEntryController@index");

Route::post('/create', "App\Http\Controllers\BbsEntryController@create");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
