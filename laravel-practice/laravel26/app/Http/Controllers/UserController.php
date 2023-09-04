<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(Request $req){

        $req->validate([
            'username' => 'required',
            'useremail' => 'required | email',
            'userpass' => 'required | alpha_num | min:6',

            'userage' => 'required | numeric | min:18', #we can use max:24 as well
            // 'userage' => 'required | numeric | between:18,35',
            'usercity' => 'required',
        ],[
            'username.required'=>'User Name is required !',
            'useremail.required'=>'User Email is required !',
            'useremail.email'=>'Email id is not correct !',
            'userpass.required'=>'User Password is required !',
            'userpass.alpha_num'=>'Password should be Alpha Numberic !',
            'userpass.min'=>'Password should be minimum 6 characters !',
            'userage.min'=>'Age should be atleast 18!',
            'usercity.required'=>' City is required !',

        ]);
         return $req->all();
    }



}
