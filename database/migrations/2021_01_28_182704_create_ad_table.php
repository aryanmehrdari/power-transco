<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad', function (Blueprint $table) {
            $table->id();
            $table->string("title",255)->collation("utf8_general_ci");
            $table->text("text_content")->collation("utf8_general_ci")->nullable();
            $table->text("tmp_path")->collation("utf8_general_ci")->nullable();
            $table->text("img_path")->collation("utf8_general_ci")->nullable();
            $table->integer("is_deleted")->default("0")->nullable();
            $table->string("price")->default("0")->nullable();
            $table->integer("city_id")->nullable();
            $table->integer("cat_id")->nullable();
            $table->float("star")->default("0")->nullable();
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
        Schema::dropIfExists('ad');
    }
}
