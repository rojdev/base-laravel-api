<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\API\AuthController;

Route::post('/login',    [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:api')->get('/me', [AuthController::class, 'me']);

