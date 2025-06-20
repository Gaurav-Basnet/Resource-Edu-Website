<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('dob')->nullable();
            $table->string('country');
            $table->string('course');
            $table->string('level');
            $table->string('intake_year');
            $table->string('intake_season');
            $table->string('current_education');
            $table->string('institution');
            $table->string('gpa');
            $table->string('grad_year');
            $table->string('budget');
            $table->string('english_level');
            $table->string('test_scores');
            $table->string('passport');
            $table->text('message')->nullable();
            $table->string('newsletter')->default('off');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
