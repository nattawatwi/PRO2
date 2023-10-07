<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('NewsID');
            $table->string('Nw_title')->nullable();
            $table->string('Nw_content')->nullable();
            $table->string('Nw_category')->nullable();
            $table->string('Nw_date')->nullable();
            $table->string('Nw_views')->nullable();
            $table->string('Nw_image')->nullable();
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
        Schema::dropIfExists('news');
    }
}
