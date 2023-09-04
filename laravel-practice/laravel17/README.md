#seeder

php artisan make:model student

php artisan make:seeder StudentSeeder
php artisan db:seed

#for one single seeder
php artisan db:seed --class=UserSeeder


#in production server
php artisan db:seed --force
php artisan db:seed --class=UserSeeder --force


#drop all migration and run migration and seeder
php artisan migrate:fresh --seed

#method for array values inside seeder
collect()

 $students->each(function($student){
             student::insert($student);
        });

0
0$ student::create([
            'name'=> fake()->name(),
            'email'=>fake()->unique()->email()
        ]);
        

# student::create([
            'name'=> fake()->name(),
            'email'=>fake()->unique()->email()
        ]);


#fakerPhp /factory
for seeder function
