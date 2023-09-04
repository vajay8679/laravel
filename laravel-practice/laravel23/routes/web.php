<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[StudentController::class,'showUsers']);
Route::get('/union',[StudentController::class,'unionUser']);
Route::get('/when',[StudentController::class,'whenData']);
Route::get('/chunk',[StudentController::class,'chunkData']);
