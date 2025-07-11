<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'App\Http\Controllers\API\AuthApiController@login')->name('login');
Route::post('/register','App\Http\Controllers\API\AuthApiController@register')->name('register');

Route::middleware('auth:api')->get('/me', 'App\Http\Controllers\API\AuthApiController@me')->name('me');
