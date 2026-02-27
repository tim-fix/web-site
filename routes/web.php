<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\Number5Controller;

use App\Http\Controllers\Controller6;





Route::get('/show', [Controller6::class,'show']);