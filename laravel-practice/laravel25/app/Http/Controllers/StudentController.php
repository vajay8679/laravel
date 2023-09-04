<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showUsers(){
        #select query
        //   $students = DB::select('select * from students');
        // $students = DB::select('select name,age from students where id = ?',[1]);
        // $students = DB::select('select name,age from students where name = ?',["Ajay Kumar"]);
        // $students = DB::select('select name,age from students where name like ?',["A%"]);
        // $students = DB::select('select name,age from students
        //                        where age > ? and name like ?',[14,"A%"]);
        // $students = DB::select('select name,age from students where id = :id',['id'=>1]);



        #insert query
        // $students = DB::insert("insert into students(name,age,email,city)
        //                         values(?,?,?,?)",["Ram Kumar",25,"ram@gmail.com",2]);

        #update command
        // $students = DB::update('update students  set email = "ram12@gmail.com" where id = ?', [10]);


        #delete command
        // $students = DB::delete("delete from students where id = ?",[6]);


        #if we dont want to see any return
        // $students = DB::statement("drop table studens");

        #delete in other way but dont use #unsecure
        // $students = DB::unprepared("delete from students where id = 4");

        #using selectRaw
        $students = DB::table('students')
                    //   ->selectRaw('count(*) as student_count,age')
                    ->select(DB::raw('count(*) as student_count'),'age')
                    //   ->whereRaw('age>20')
                    // ->whereRaw('age>?',[20])
                    // ->whereRaw('age>? and name like ?',[14,'A%'])
                    // ->orderByRaw('age DESC')
                    // ->orderByRaw('age,name')
                    // ->where(DB::raw('age>? and name like ?',[14,'A%']))
                    // ->groupBy('age')
                    ->groupByRaw('age')
                    ->havingRaw('age > ?',[20])
                      ->get();
                    //   ->toSql();

        //   foreach($students as $student){
        //     echo $student->name."<br>";
        //   }

          return $students;
    }


}
