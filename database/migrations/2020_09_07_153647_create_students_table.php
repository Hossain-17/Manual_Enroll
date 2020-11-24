<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('student_id');
            $table->string('email');
            $table->date('dob')->nullable();
            $table->string('semester');
            $table->string('batch');
            $table->string('gender')->nullable();
            $table->string('adviser');
            $table->boolean('status')->default('1');
            // $table->foreign('semester_id')
            //       ->refernces('id')->on('semesters')
            //       ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
