<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #one method
        // $students = collect(
        //    [
        //      [
        //         'name'=> 'Yahoo Baba',
        //         'email'=> 'yahoo@gmail.com'
        //     ],
        //     [
        //         'name'=> 'Ajay Kumar',
        //         'email'=> 'ajay@gmail.com'
        //     ],
        //     [
        //         'name'=> 'Amit Kuamr',
        //         'email'=> 'amit@gmail.com'
        //     ],
        //     [
        //         'name'=> 'Sumit Kumar',
        //         'email'=> 'sumit@gmail.com'
        //     ]
        //    ]
        // );


    //     $students->each(function($student){
    //         student::insert($student);
    //    });


        #second method
        #we can use json file if we have thousands of data
        // $json = File::get(path:'database/json/students.json');

        // $students = collect(json_decode($json));

        // $students->each(function($student){
        //     student::create([
        //     'name'=> $student->name,
        //     'email'=> $student->email
        // ]);
        // });


         #third method
        // student::create([
        //     'name'=>'Yahoo Baba',
        //     'email'=>'yahoobala@gmail.com'
        // ]);


        #fourth method for fake data
        // student::create([
        //     'name'=> fake()->name(),
        //     'email'=>fake()->unique()->email()
        // ]);

        #fifth method
        // for ($i=0;$i<10;$i++){
        // student::create([
        //     'name'=> fake()->name(),
        //     'email'=>fake()->unique()->email()
        // ]);
    // }
    student::factory()->count(10)->create();

    }
}
