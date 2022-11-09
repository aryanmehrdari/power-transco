<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email',191)->unique();
            $table->integer('is_admin')->default('0')->nullable();
            $table->integer('is_deleted')->default('0')->nullable();
            $table->string('user_image')->default('avatar-logo.png')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();

            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
