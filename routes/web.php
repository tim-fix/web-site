<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/show', [FlightController::class,'show']);
Route::get('/post/all/{order?}', [PostsController::class,'getAll']);
Route::get('/post/{id}', [PostsController::class,'getOne']);