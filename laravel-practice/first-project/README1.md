#Global Installation
composer global require laravel/installer
laravel new first-project


#Perproject Installation-> diff project diff version
composer create-project laravel/laravel first-project

php artisan serve

#show list of commands
php artisan

#show list of routes command
php artisan route -h

#all route list
php artisan route:list

#our route list
php artisan route:list --except-vendor

#list of routes path
php artisan route:list --path=post