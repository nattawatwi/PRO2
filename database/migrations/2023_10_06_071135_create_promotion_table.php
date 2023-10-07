<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion', function (Blueprint $table) {
            $table->increments('PromotionID');
            $table->string('Pm_name')->nullable();
            $table->string('Pn_detail')->nullable();
            $table->string('Pn_date')->nullable();
            $table->string('Pn_price')->nullable();
            $table->string('Pn_terms (เงื่อนไข)')->nullable();
            $table->string('Pn_Image')->nullable();
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
        Schema::dropIfExists('promotion');
    }
}
