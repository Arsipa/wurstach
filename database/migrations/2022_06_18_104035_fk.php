<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->foreignId("course_id")->references("id")->on("courses");
        });
        
        Schema::table('courses', function (Blueprint $table) {
            $table->foreignId("faculty_id")->references("id")->on("faculties");
            $table->foreignId("author_id")->references("id")->on("authors");
        });
        
        Schema::create('users_courses', function (Blueprint $table) {
            $table->foreignId("course_id")->references("id")->on("courses");
            $table->foreignId("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
