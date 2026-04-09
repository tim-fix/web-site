<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/show', [FlightController::class,'show']);
Route::match(['get','post'], '/post/all/{order?}', [PostsController::class,'getAll']);
Route::get('/post/new', [PostsController::class,'newPost']);
Route::match(['get','post'], '/post/{id}', [PostsController::class,'newPost']);
Route::post('/post/new', [PostsController::class,'newPost']);
Route::get('/post/rework', [PostsController::class,'rework']);
Route::match(['get','post'], '/post/edit/{id}', [PostsController::class,'editPost']);
Route::get('/post/first', [PostsController::class,'first']);
Route::get('/post/del/{id}', [PostsController::class,'delPost']);
Route::get('/getDeletedPost/{id}', [PostsController::class,'getDeletedPost']);
Route::match(['get', 'post'], '/restorePost', [PostsController::class,'restorePost']);