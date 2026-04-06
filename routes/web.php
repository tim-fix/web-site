<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/show', [FlightController::class,'show']);
Route::get('/phone', [UserController::class,'phone']);