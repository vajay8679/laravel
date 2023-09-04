#Laravel Query Builder

php artisan migrate:fresh --seed

#to check return
dd($users);


#to remove timestamp -> created_at and updated_at
    public $timestamps = false;

#inserOrIgnore to check if unique value or not

#upsert - first check if unique value based on parameter then it will update if unique value otherwise insert
  $user = DB::table('users')->upsert(
            ['name'=>'Hari',
            'email'=>'abc@gmail.com',
            'age'=>21,
            'city'=>'vancover'
        ],
        ['email'],
        ['city']  

        );


#to get id - insertGetId()

$user = DB::table('users')->insertGetId(
                    ['name'=>'Rasid',
                    'email'=>'rasid@gmail.com',
                    'age'=>22,
                    'city'=>'delhi'
                ]
                );



#update

  public function updateUser(){
        $user = DB::table('users')
                ->where('id',1)
                ->update([
                    'city'=>'chandigarh'
                ]);
    }




#pagination


paginate()
simplePaginate()
cursonPaginate()

#laravel->database->pagination->using bootstrap
https://laravel.com/docs/10.x/pagination#using-bootstrap



for bootstrap pagination class
#inside - App\Providers\AppServiceProvider

use Illuminate\Pagination\Paginator;
Paginator::useBootstrapFive();
Paginator::useBootstrapFour();


we can use below line only for pagination

{{ $data->links('pagination::bootstrap-5')}}
