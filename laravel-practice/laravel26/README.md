#laravel validations

https://laravel.com/docs/10.x/validation

https://laravel.com/docs/10.x/validation#available-validation-rules
laravel->basics->validation->available  validation rules


/var/www/html/laravel-practice/laravel26/vendor/laravel/framework/src/Illuminate/Translation/lang/en/validation.php


#to keep old value in field old() and error @error()

<input type="number" value="{{ old('userage')}}" class="form-control @error('userage') is-invalid @enderror" name="userage">




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


'custom' => [
        // 'attribute-name' => [
        //     'rule-name' => 'custom-message',
        // ],
        'useremail' => [
            'required' => 'Email is must must required.',
            'email' => 'Apki email id correct nahi hai.'
        ],
        'userage' => [
            'min' => 'Age should not be less than 18 year.'
        ],
    ],



    'attributes' => [
        'username' => 'User Name',
        'useremail' => 'Email Address',
        'userpass' => 'User Password',
        'userage' => 'User Age',

    ],
