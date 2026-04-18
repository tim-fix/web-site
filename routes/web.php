<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/getDeletedPost/{id}', [PostsController::class,'getDeletedPost']);
Route::match(['get', 'post'], '/profiles', [UsersController::class,'profiles']);
Route::get('/comment', [PostsController::class,'comment']);