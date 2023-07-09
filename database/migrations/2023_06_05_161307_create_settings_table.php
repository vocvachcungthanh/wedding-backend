<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('brides_name');
            $table->string('grooms_name');
            $table->string("address_home_brides");
            $table->string("address_home_grooms_name");
            $table->string("map_brides");
            $table->string("map_grooms");
            $table->string("time_wedding");
            $table->string("facebook_brides");
            $table->string("facebook_grooms");
            $table->string("instagram_brides");
            $table->string("instagram_grooms");
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
        Schema::dropIfExists('settings');
    }
};