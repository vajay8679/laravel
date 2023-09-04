#pass value from route to view

#second parameter always in array
Route::get('/users', function () {
    return view('users',['users' => 'Yahoo Baba']);
});



#using function inside route
Route::get('/user/{id}', function ($id) {
    $users = getUsers();

    abort_if(!isset($users[$id]),404);
    $user = $users[$id];

    return view('user',['id'=> $user]);
})->name("view.user");