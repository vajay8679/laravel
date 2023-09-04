#modification in migration file

php artisan make:migration update_students_table --table=students


#modification in table
$table->renameColumn('city','cities');
$table->dropColumn('percentage');
$table->string('city',60)->default('No city')->change();


#table modification
php artisan make:migration migration_table

 public function up(): void
    {
        Schema::rename('students','student');
        Schema::dropIfExists('users');
    }