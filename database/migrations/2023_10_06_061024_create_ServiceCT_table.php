<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceCTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ServiceCT', function (Blueprint $table) {
            $table->increments('ServiceCenterID');
            $table->string('Sc_name')->nullable();
            $table->string('Sc_address')->nullable();
            $table->string('Sc_phone')->nullable();
            $table->string('Sc_email')->nullable();
            $table->string('MapID')->nullable();
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
        Schema::dropIfExists('ServiceCT');
    }
}
