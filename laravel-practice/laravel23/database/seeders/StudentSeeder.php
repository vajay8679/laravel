<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        #second method
        #we can use json file if we have thousands of data
        $json = File::get(path:'database/json/student.json');

        $students = collect(json_decode($json));

        $students->each(function($student){
            Student::create([
            'name'=> $student->name,
            'email'=> $student->email,
            'age'=> $student->age,
            'city'=> $student->city

        ]);
        });




    }
}
