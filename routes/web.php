<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/getDeletedPost/{id}', [PostsController::class,'getDeletedPost']);
Route::match(['get', 'post'], '/profiles', [UsersController::class,'profiles']);
Route::match(['get', 'post'], '/book', [BookController::class,'book']);
Route::match(['get', 'post'], '/moderator', [BookController::class,'moderator']);
Route::get('/del/{id}', [BookController::class,'moderatordel']);
Route::match(['get', 'post'], '/rew/{id}', [BookController::class,'moderatorrew']);