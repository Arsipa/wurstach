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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(["name", "email_verified_at"]);
            $table->dropRememberToken();
        });

        Schema::drop("password_resets");
        Schema::drop("personal_access_tokens");

        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });
        
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });
        
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("sub_title");
            $table->string("subTitle");
            $table->string("time");
            $table->text("description");
            $table->integer("price");
            $table->timestamps();
        });
       
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("video_src");
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
        //
    }
};
