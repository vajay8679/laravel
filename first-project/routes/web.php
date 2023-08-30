<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#first method to define route
// Route::get('/post', function () {
//     return view('post');
//     // return "<h1>Post Page from route</h1>";
// });

// Route::get('/about', function () {
//     return view('about');
// });

#name routing
// Route::get('/postss', function () {
//     return view('post');
// })->name("mypost");

// Route::get('post/postss', function () {
//     return view('post');
// })->name("mypost");

// Route::get('/', function () {
//     return view('welcome');
// })->name("home");


#routing redirection to other location
// Route::get('/testing', function () {
//     return view('about');
// });

// Route::redirect('/about','/testing',301);


#second method to define route
// Route::view("post","/post"); #first route name and then view name

#we can define different route name
// Route::get('/hello', function () {
//     return view('post');
// });

#if we want to give route parameter
// Route::get('/post/{id}', function (string $id) {
//     return "<h1>Post ID: " .$id."</h1>";
// });

// #if no id found then routing
// Route::get('/post/{id?}', function (string $id = null) {
//     if($id){
//         return "<h1>Post ID: " .$id."</h1>";
//     }else{
//         return "<h1>No Record found</h1>";
//     }
// });

#for multiple parameter routing
// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null,string $comment = null) {
//     if($id){
//         return "<h1>Post ID: " .$id."</h1><h2>Comment: " .$comment."</h2>";
//     }else{
//         return "<h1>No Record found</h1>";
//     }
// });

#for alphanumeric,numeric,alpha parameter
// Route::get('/post/{id}', function (string $id) {
//     if($id){
//         return "<h1>Post ID: " .$id."</h1>";
//     }else{
//         return "<h1>No Record found</h1>";
//     }
// })/* ->whereNumber('id') */
// /* ->whereAlpha('id') */
// /* ->whereAlphaNumeric('id') */
// /* ->whereIn('id',['movie','song','painting','electric']) */
// /* ->where('id','[0-9]+') */
// ->where('id','[a-zA-Z]+');


#for multiple parameter routing with proper validations
// Route::get('/post/{id?}/comment/{commentid?}', function (string $id ,string $comment) {
//     if($id){
//         return "<h1>Post ID: " .$id." & Comment: " .$comment."</h2>";
//     }else{
//         return "<h1>No Record found</h1>";
//     }
// })->where('id','[0-9]+')->whereAlpha('commentid');

// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });


#using of prefix in routing
// Route::prefix('page')->group(function(){

//     Route::get('/about',function(){
//         return "<h1>About Page</h1>";
//     });

//     Route::get('/post/firstpost',function(){
//         return "<h1>First Post Page</h1>";
//     });

//     Route::get('/gallery',function(){
//         return "<h1>Gallery Page</h1>";
//     });
// });


#route fallback function which redirect to given pages if no url found
// Route::fallback(function(){
//     return "<h1>Page Not found.</h1>";
// });