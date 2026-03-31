<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/show', [FlightController::class,'show']);
Route::get('/post/all/{order?}', [PostsController::class,'getAll']);
Route::get('/post/new', [PostsController::class,'newPost']);
Route::post('/post/new', [PostsController::class,'newPost']);
Route::get('/post/rework', [PostsController::class,'rework']);
Route::match(['get','post'], '/post/edit', [editPostController::class,'editPost']);