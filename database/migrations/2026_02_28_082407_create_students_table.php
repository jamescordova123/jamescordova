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

        $table->id();
        $table->string('first_name');
        $table->string('middle_name')->nullable();
        $table->string('last_name');
        $table->date('birth_date');
        $table->enum('gender', ['M','F']);
        $table->string('student_number')->unique();
        $table->decimal('gpa', 4, 2);
         
        $table->string('course');
        $table->string('year_level');
        $table->string('section')->nullable();
        $table->string('academic_year');

        $table->string('email')->unique();
        $table->string('contact_number')->nullable();
        $table->text('address')->nullable();

        $table->timestamps();
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
