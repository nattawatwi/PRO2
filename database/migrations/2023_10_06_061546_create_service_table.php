<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->increments('ServiceID');
            $table->string('Sv_name')->nullable();
            $table->string('Sv_detail')->nullable();
            $table->string('Sv_date')->nullable();
            $table->string('Sv_Image')->nullable();
            $table->string('Sv_price')->nullable();
            $table->string('Sv_terms')->nullable();
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
        Schema::dropIfExists('service');
    }
}
