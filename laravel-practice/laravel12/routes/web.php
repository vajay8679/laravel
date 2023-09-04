<?php

use Illuminate\Support\Facades\Route;

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


function getUsers(){

    return [1=>['name'=>'Ajay','phone'=> '9388488422','Address'=>'Indore'],
                2=>['name'=>'Amit','phone'=> '23233232','Address'=>'Bhopal'],
                3=>['name'=>'Sumit','phone'=> '11122133','Address'=>'Chhindwara'],
                4=>['name'=>'Raja','phone'=> '89888334','Address'=>'Delhi']    
             ];
}

Route::get('/', function () {
    return view('welcome');
});


#one method
// Route::get('/users', function () {

//     $name = "Ajay Verma";
//     $city = "Indore";
//     return view('users',['users' => $name,'city' => $city,'js'=>'<script>alert("Hello")</script>']);
// });

#second method
// Route::get('/users', function () {

//     $name = "Ajay Verma";
//     $city = "Indore";
//     return view('users')->with('users', $name)->with('city',$city);
// });


#third method
// Route::get('/users', function () {

//     $name = "Ajay Verma";
//     $city = "Indore";
//     return view('users')->withUsers($name)->withCity($city);
// });

#fourth method
Route::get('/users', function () {

    // $names = [1=>['name'=>'Ajay','phone'=> '9388488422','Address'=>'Indore'],
    //             2=>['name'=>'Amit','phone'=> '23233232','Address'=>'Bhopal'],
    //             3=>['name'=>'Sumit','phone'=> '11122133','Address'=>'Chhindwara'],
    //             4=>['name'=>'Raja','phone'=> '89888334','Address'=>'Delhi']    
    //          ];

    $names = getUsers();
    $city = "Indore";
    return view('users')->withUsers($names)->withCity($city);
});


// Route::get('/user/{id}', function ($id) {
//     return "<h1>User ID :" . $id . "</h1>";
// })->name("view.user");


Route::get('/user/{id}', function ($id) {
    $users = getUsers();

    abort_if(!isset($users[$id]),404);
    $user = $users[$id];

    return view('user',['id'=> $user]);
})->name("view.user");