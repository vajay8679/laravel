<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function showHome(){
        // return "<h1>Welcome to controller Page</h1>";

        return view('welcome');
    }

    public function showUser(string $id){
        // return view('user',['id'=> $id]);
        return view('user',compact('id')); #uses if same name of id and variable

    }

    public function showBlog(){
        return view('blog');
    }
    
}
