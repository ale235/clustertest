<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('avatar');
            $table->tinyInteger('seen');
            $table->tinyInteger('confirmed');
            $table->string('confirmation_code');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('users_status_id')->unsigned();
            $table->foreign('users_status_id')->references('id')->on('users_statuses')->onDelete('cascade');
            $table->integer('users_role_id')->unsigned();
            $table->foreign('users_role_id')->references('id')->on('users_roles')->onDelete('cascade');
            $table->string('facebook_id');
            $table->string('twitter_id');
            $table->string('google_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
