<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Number5Controller;

// 1
// Route::get('/tests', function () {
//     echo 'привет';
// });
// //2
// Route::get('/dir/tests', function () {
//     echo 'привет';
// });
// //7
// Route::get('/user/{id}/{name}', function ($id,$name) {
//     echo '987';
// });
// //6
// Route::get('/user/{id}', function ($id) {
//     echo '123';
// });
// //3
// Route::get('/user/{p1}', function ($name) {
//     echo '321';
// });
// //4
// Route::get('/user/{p1}/{p2}', function ($surname,$name) {
//     echo '123';
// });
// //5
// Route::get('/city/{p1?}', function ($city = 'Omsk') {
//     echo $city;
// });
// //8
// Route::get('/posts/{date}', function ($date) {
//     echo '009';
// })->where('date','2005-12-12')
// ;
// //9
// Route::get('/{p1}/{p2}/{p3}', function ($year,$month,$day) {
//     echo $year.'-'.$month.'-'.$day;
// })->where('year','[2000-2100]')->where('month','[1-12]')->where('day','[1-31]');
//10
// Route::get('/{p1}', function ($name,$surname,$age) {
//     echo 'привет';
// })->where('name','')->where('month','[1-12]')->where('day','[1-31]');



// Route::get('/post/{id}', [PostController::class,'show']);

Route::get('/show', [Number5Controller::class,'show']);

// Route::get('/user', [UserController::class,'show']);

// Route::get('/user/all', [UserController::class,'all']);

// Route::get('/user/{name}', [UserController::class,'name']);

// Route::get('/user/{surname}/{name}', [UserController::class,'surnamename']);

// Route::get('/user/{name}', [UserController::class,'city']);

// Route::get('/show', [PostController::class, 'show']);