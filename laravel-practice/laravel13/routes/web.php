<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', function () {
    return view('welcome');
});


// Route::get('/',[PageController::class,'showHome']);
// Route::get('/user',[PageController::class,'showUser']);



// Route::get('/',[PageController::class,'showHome'])->name('home');
// Route::get('/blog',[PageController::class,'showBlog'])->name('blog');
// Route::get('/user/{id}',[PageController::class,'showUser'])->name('users');

Route::controller(PageController::class)->group(function(){

Route::get('/','showHome')->name('home');
Route::get('/blog','showBlog')->name('blog');
Route::get('/user/{id}','showUser')->name('users');
});

Route::get('/test',TestingController::class);