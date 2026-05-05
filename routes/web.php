<?php

use App\Http\Controllers\DescController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/first', [DescController::class, 'first_screen']);
Route::match(['get', 'post'], '/desc', [DescController::class,'desc']);
Route::match(['get', 'post'], 'test/form', [TestController::class, 'form']);
Route::get('test/result', [TestController::class, 'result']);