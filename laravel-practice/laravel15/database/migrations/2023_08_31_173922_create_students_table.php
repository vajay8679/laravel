<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id');
            $table->string('name',30);
            $table->string('email')->unique()->nullable();
            $table->string('city',30)->default('No city');
            $table->float('percentage',3,2)->comment("student Percentage");
            $table->integer('age')->unsigned();
            $table->primary('student_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
