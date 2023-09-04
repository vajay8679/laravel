<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        #second method
        #we can use json file if we have thousands of data
        $json = File::get(path:'database/json/users.json');

        $users = collect(json_decode($json));

        $users->each(function($student){
            user::create([
            'name'=> $student->name,
            'email'=> $student->email,
            'age'=> $student->age,
            'city'=> $student->city

        ]);
        });




    }
}
