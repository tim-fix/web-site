<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\Number5Controller;

Route::get('/post/{id}', [PostController::class,'show']);

Route::get('/show', [Number5Controller::class,'show']);