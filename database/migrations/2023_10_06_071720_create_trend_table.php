<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trend', function (Blueprint $table) {
            $table->increments('TrendID');
            $table->string('Tn_title')->nullable();
            $table->string('Tn_content')->nullable();
            $table->string('Tn_category')->nullable();
            $table->string('Tn_date')->nullable();
            $table->string('Tn_views')->nullable();
            $table->string('Tn_Image')->nullable();
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
        Schema::dropIfExists('trend');
    }
}
