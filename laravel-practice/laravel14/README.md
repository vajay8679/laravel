#database and migrations

php artisan make:migration create_students_table

php artisan migrate

php artisan migrate:status

#forcefully migrate
php artisan migrate --force


#undo last migrate command
php artisan migrate:rollback


#undo last two migrate command
php artisan migrate:rollback --step=2


#undo 2nd last migrate command
php artisan migrate:rollback --batch=2


#reset means remove all the tables except migration and remove data from migration file as well
php artisan migrate:reset

#rollback all  and migrate means first reset and then migrate some time we want to remove data
php artisan migrate:refresh

#drop all the tables and migrate all files
php artisan migrate:fresh


#create model and migration file
php artisan make:model Task -m
