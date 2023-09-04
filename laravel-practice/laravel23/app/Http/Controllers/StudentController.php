<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showUsers(){
        // $students = DB::table('students')
        //             ->select('students.*','cities.city_name')
        //             // ->select(DB::raw('count(*) as student_count'),'cities.city_name')

        //             // ->join('cities','students.city' ,'=','cities.id')
        //             ->leftJoin('cities','students.city' ,'=','cities.id')

                    // ->groupBy('city_name')
                    // ->groupBy('city_name','age')
                    // ->orderBy('student_count','DESC')
                    // ->where('students.email','=','ajay@gmail.com')
                    // ->where('students.name','like','A%')
                    // ->where('cities.city_name','=','bhopal')
                    // ->having('cities.city_name','=','bhopal')   #generally we use having clause with group
                    // ->having('student_count','>',1)
                    // ->havingBetween('student_count',[1,2])
                   // ->get();
                    // ->count();
        $students = DB::table('students')
                    ->leftJoin('cities',function(JoinClause $std){
                        $std->on('students.city' ,'=','cities.id')
                        ->where('students.name','like','A%');
                    })
                    ->select('students.*','cities.city_name')

                    ->get();

        // return $students;
        return view('welcome',['data'=>$students]);
    }

    public function unionUser(){

        $lecturers = DB::table('lecturers')
                     ->select('name','email','city_name')
                        ->leftJoin('cities','lecturers.city' ,'=','cities.id')
                         ->where('cities.city_name','=','bhopal');

        $students = DB::table('students')
                     ->union($lecturers)
                     ->select('name','email','city_name')
                     ->leftJoin('cities','students.city' ,'=','cities.id')
                     ->where('cities.city_name','=','delhi')
                     ->get();
                    // ->toSql(); #to check sql query

        return $students;
    }


    public function whenData(){
        // $students = DB::table('students')
        //             ->when(true,function($query){
        //                 $query->where('age','>',20);
        //             })
        //             ->get();

        // $test = false;
        $students = DB::table('students')
                    ->when(true,function($query){
                        $query->where('age','>',20);
                    },function($query){
                        $query->where('age','<',20);

                    })
                    ->get();

                    return $students;
    }


    public function chunkData(){

        #to show the data based on id's
        // $students = DB::table('students')->orderBy('id')
        //             ->chunk(3,function($students){
        //                 echo "<div style='border:1px solid red; margin-bottom:15px; '>";
        //                 foreach($students as $student){
        //                 echo $student->name."<br>";
        //                 }
        //                 echo "</div>";
        //             });


        #update in chunks
        $students = DB::table('students')->orderBy('id')
                    ->chunkById(3,function($students){
                        foreach($students as $student){
                            DB::table('students')
                            ->where('id',$student->id)
                            ->update(['status'=>true]);
                        }
                    });
    }
}
