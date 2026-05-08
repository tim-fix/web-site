<?php

use App\Http\Controllers\FormsController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/first', [DescController::class, 'first_screen']);
Route::match(['get', 'post'], '/desc', [DescController::class,'desc']);
Route::get('/test/method/', [FormsController::class, 'showPath']);
Route::get('/session', [SessionController::class, 'session']);
Route::match(['get', 'post'], '/form', [TestController::class, 'form']);
Route::match(['get', 'post'], '/result', [TestController::class, 'result']);
