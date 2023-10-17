<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OgnID')->nullable();
            $table->string('Password')->nullable();
            $table->string('Ogn_name')->nullable();
            $table->string('Ong_type')->nullable();
            $table->string('Ong_phone')->nullable();
            $table->string('Ong_email')->nullable();
            $table->string('Ong_address')->nullable();
            $table->string('MapURL')->nullable();
            $table->string('ServiceID')->nullable();
            $table->string('ServiceCenterID')->nullable();
            $table->string('PromotionID')->nullable();
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
        Schema::dropIfExists('organization');
    }
}
