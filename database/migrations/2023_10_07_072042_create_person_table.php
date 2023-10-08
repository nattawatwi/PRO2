<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('PersonID');
            $table->string('Ps_name')->nullable();
            $table->string('Ps_sex')->nullable();
            $table->string('Ps_birthday')->nullable();
            $table->string('Ps_IDnumber')->nullable();
            $table->string('Ps_phone')->nullable();
            $table->string('Ps_email')->nullable();
            $table->string('Ps_address')->nullable();
            $table->string('ServiceCenterID')->nullable();
            $table->string('ServiceID')->nullable();
            $table->string('PromotionID')->nullable();
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
        Schema::dropIfExists('person');
    }
}
