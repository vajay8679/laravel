<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        // $users = DB::table("users")->get();

        #for paginate
        $users = DB::table("users")
                //  ->where('city','delhi')
                //  ->orderBy('name')
                // ->simplePaginate(5);
                //   ->paginate(4,['*'],'p',2);
                // ->paginate(4)
                // ->fragment('users');
                // ->appends(['sort'=>'votes','test'=>'abc']);

                ->orderBy('id')
                ->cursorPaginate(4);




        // $users = DB::table("users")->where('id',2)->get();

        // $users = DB::table("users")
        //              ->select('name','email as user_email')
        //              ->get();

        // $users = DB::table("users")
        //              ->select('city')
        //              ->distinct()
        //              ->get();

        #for one column only
        // $users = DB::table("users")
        //     // ->pluck('name');
        //     ->pluck('name','email');


        // $users = DB::table("users")
        //              ->where('city','delhi')
        //              ->where('age','>',15)
        //              ->get();


        // $users = DB::table("users")
        //              ->where('name','like','A%')
        //              ->get();


        #using of multiple where conditon in single where
        // $users = DB::table("users")
        //              ->where([
        //                 ['city','=','Delhi'],
        //                 ['age','>',24]
        //              ])
        //              ->get();

        #using of multiple where conditon in single where
        // $users = DB::table("users")
        //              ->where('city','=','Delhi')
        //              ->orWhere('age','>',25)
        //              ->get();


          #using of multiple where conditon in single where
        //   $users = DB::table("users")
        //   ->whereBetween('id',[3,6])
        // ->whereBetween('age',[20,36])
        // ->whereNotBetween('age',[20,32])
        // ->whereIn('id',[3,5,7])
        // ->whereIn('city',['delhi','mumbai','indore'])
        // ->whereNotIn('city',['delhi','mumbai','indore'])
        // ->orWhereNotIn('city',['delhi','mumbai','indore'])
        // ->whereNotNull('email')
        // ->whereNotNull('email')
        // ->whereNull('email')
        // ->whereNull('email')
        // ->whereNull('email')
        // ->whereNull('email')
        // ->whereNull('email')
        // ->whereDate('created_at','2023-09-07')
        // ->whereMonth('created_at','09')
        // ->whereDay('created_at','07')
        // ->whereYear('created_at','2023')
        // ->whereTime('created_at','07:01:57')
        // ->get();

        // return $users;
        // dd($users); #iske bad ka code wont work
        // dump($user); #iske bad ka code will work

        // foreach($users as $user){
        //     echo $user->name."<br>";
        // }

         #order by
        // $users = DB::table("users")
        // ->orderBy('name','asc')
        // ->orderBy('age','desc')
        // ->get();


        #first element
        // $users = DB::table("users")
        //         // ->latest()
        //         // ->oldest()
        //         ->inRandomOrder()
        //         ->first();

        #limit
        // $users = DB::table("users")
        //          ->limit(3) #we can use take() inplace of limit()
        //          ->offset(3) #3 entry after 3rd records #we can use skip() inplace of offset()
        //          ->offset(6) #3 entry after 6th records

        //          ->get();

        #aggregate function
        //$users = DB::table("users")
                //  ->count();
                // ->max('age');
                // ->min('age');
                // ->avg('age');
               // ->sum('age');


        //  return $users;

        return view('allusers',['data'=> $users]);
    }


    #static value id
    // public function singleUsers(){
    //     // $users = DB::table('users')->find(2);
    //     $users = DB::table('users')->where('id',2)->get();

    //     return $users;
    // }


      #dynamica value id
      public function singleUsers(string $id){
        // $users = DB::table('users')->find(2);
        $user = DB::table('users')->where('id',$id)->get();

        // return $users;
        return view('userdetail',['data'=>$user]);
    }


    public function updatePage(string $id){
        // $user = DB::table('users')->where('id',$id)->get();
        $user = DB::table('users')->find($id);

        // return $user;
        return view('updateuser',['data'=>$user]);
    }


    public function addUser(Request $req){

        #return  $req
        // return $req;

        #return of $req
        // {
        //     "_token": "h7wNIOegebv7wU8bKOkxX6mPtXHHeCnrheBhHAhB",
        //     "username": "tesgin1",
        //     "useremail": "vaj@gmail.com",
        //     "userage": "44",
        //     "usercity": "Indprww"
        //   }



        #for single record
        // $user = DB::table('users')->insert([
        //     'name'=>'Hari',
        //     'email'=>'Hari@gmail.com',
        //     'age'=>25,
        //     'city'=>'seoni',
        //     'created_at'=>now(),
        //     'updated_at'=>now()
        // ]);


        #for single record check unique value
        // $user = DB::table('users')->insertOrIgnore([
        //     ['name'=>'Hari',
        //     'email'=>'aja@gmail.com',
        //     'age'=>25,
        //     'city'=>'seoni'
        //     ]
        // ]);


        // $user = DB::table('users')->upsert(
        //     ['name'=>'Hari',
        //     'email'=>'abc@gmail.com',
        //     'age'=>21,
        //     'city'=>'vancover'
        // ],
        // ['email'], #check unique
        // ['city'] #update this column only

        // );

        #to get id
        $user = DB::table('users')->insertGetId(
                    [
                    'name'=>$req->username,
                    'email'=>$req->useremail,
                    'age'=>$req->userage,
                    'city'=>$req->usercity
                   ]
                );


        #for multiple record
        // $user = DB::table('users')->insert([
        //     [
        //     'name'=>'Ram',
        //     'email'=>'ram@gmail.com',
        //     'age'=>21,
        //     'city'=>'Ayoudhya',
        //     'created_at'=>now(),
        //     'updated_at'=>now()
        //     ],
        //     [
        //         'name'=>'Shyam',
        //         'email'=>'shyam@gmail.com',
        //         'age'=>19,
        //         'city'=>'Mathura',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ]
        // ]);

        // dd($user);

        if($user){
            // echo "<h1>Data Successfully Inserted. </h1>";
            return redirect()->route('home');
        }else{
            echo "<h1>Data Not Inserted. </h1>";

        }


        // return $user;
    }

    public function updateUser(Request $req,$id){
    // return  $req;
        $user = DB::table('users')
                ->where('id',$id)
                ->update([
                        'name'=>$req->username,
                        'email'=>$req->useremail,
                        'age'=>$req->userage,
                        'city'=>$req->usercity
                ]);


        #check if value exists then update otherwise insert
    //     $user = DB::table('users')
    //     ->updateOrInsert(
    //         [
    //         'name'=>'Dheeraj Kumar',
    //         'email'=>'d@gmail.com',
    //         'city' =>'goa'
    //         ],
    //         ['age'=>20]

    // );


            //  $user = DB::table('users')
            //     ->where('id',4)
                // ->increment('age');
                // ->increment('age',5);
                // ->decrement('age',5);
                // ->decrement('age',5,['city'=>'Jammu']); #we can update new field as well

                // ->incrementEach([  #for multiple values
                //     'age' => 3,
                //     'vote'=> 4
                // ]);

        if($user){
            return redirect()->route('home');

            // echo "<h1>Data Successfully Updated. </h1>";
        }else{
            echo "<h1>Data Not Updated. </h1>";

        }

    }


    public function deleteUser(string $id){
        $user = DB::table('users')
                ->where('id',$id)
                ->delete();


        if($user){
            return redirect()->route('home');
        }
                // if($user){
                //     echo "<h1>Data Successfully Deleted. </h1>";
                // }else{
                //     echo "<h1>Data Not Deleted. </h1>";

                // }
    }


    public function deleteAllUser(){
        $user = DB::table('users')
                // ->delete(); #delete all and id start from last id
                ->truncate(); #make empty all and id start from 1

    }



}
