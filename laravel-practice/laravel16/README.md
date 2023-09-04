#Laravel : Migration Primary & Foreign key



#cascade use when we want to update in primary key and then it wil abutomatically update in foreign table key
$table->foreign('stu_id')->references('id')
                  ->on('students')
                  ->onUpdate('cascade')
                  ->onDelete('cascade')
                  /* ->onDelete('set null') */;

#we have to run rollback command for that
php artisan migrate:rollback

insert into libraries (stu_id,book,due_date,status) values(1,"Book One","2023-02-02",1),(3,"Book Two","2023-02-06",1);


 $table->dropForeign('student_id');
