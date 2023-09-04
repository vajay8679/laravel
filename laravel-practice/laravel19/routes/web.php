<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',[UserController::class ,'showUsers'])->name('home');
// Route::get('/users/{id}',[UserController::class ,'singleUsers'])->name('view.user');
// Route::post('/add',[UserController::class ,'addUser'])->name('addUser');
// Route::get('/update',[UserController::class ,'updateUser']);
// Route::get('/updatepage/{id}',[UserController::class ,'updatePage'])->name('update.page');

// Route::get('/delete/{id}',[UserController::class ,'deleteUser'])->name('delete.user');
// Route::get('/deleteusers',[UserController::class ,'deleteAllUser']);


Route::controller(UserController::class)->group(function(){
    Route::get('/','showUsers')->name('home');
Route::get('/users/{id}','singleUsers')->name('view.user');
Route::post('/add','addUser')->name('addUser');
// Route::post('/update/{id}','updateUser')->name('update.user');
Route::put('/update/{id}','updateUser')->name('update.user'); #use to protect from hackers use @method("PUT") in view

Route::get('/updatepage/{id}','updatePage')->name('update.page');

Route::get('/delete/{id}','deleteUser')->name('delete.user');
Route::get('/deleteusers','deleteAllUser');

});

Route::view('newuser','/adduser');
