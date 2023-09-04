<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use Illuminate\Support\Facades\File;

class CitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        #second method
        #we can use json file if we have thousands of data
        $json = File::get(path:'database/json/city.json');

        $cities = collect(json_decode($json));

        $cities->each(function($city){
            City::create([
            'city_name'=> $city->city_name,
        ]);
        });




    }
}
