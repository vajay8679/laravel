#Laravel controller

php artisan

php artisan help make:controller

php artisan make:controller UserController




#route
Route::get('/',[PageController::class,'showUser']);


#function

public function showUser(){
        return "<h1>Welcome to controller Page</h1>";
    }
}

#uses if same name of id and variable
return view('user',compact('id')); 

#grouping of controller route
Route::controller(PageController::class)->group(function(){
Route::get('/','showHome')->name('home');
Route::get('/blog','showBlog')->name('blog');
Route::get('/user/{id}','showUser')->name('users');
});



#invoke method called directly when we call class
php artisan make:controller TestingController --invokable


#check list
php artisan route:list --except-vendor
php artisan route:list --path=user
