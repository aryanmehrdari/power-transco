<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePairedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paired', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('ref_id')->nullable();
            $table->string('status')->default('درحال بررسی')->nullable();
            $table->string('ad_name')->nullable();
            $table->string('ad_count')->nullable();
            $table->string('price')->nullable();
            $table->string('price_count')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('paired');
    }
}
