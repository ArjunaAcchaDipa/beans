<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class coffee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->float('rating')->default('0');
            $table->string('shop_address')->nullable();
            $table->string('shop_website')->nullable();
            $table->string('shop_maps')->nullable();
            $table->string('phone')->nullable();
            $table->string('shop_pict')->default('images/profile.png');
            $table->string('shop_pict1')->default('images/profile.png');
            $table->string('shop_pict2')->default('images/profile.png');
            $table->string('shop_pict3')->default('images/profile.png');
            $table->string('shop_pict4')->default('images/profile.png');
            $table->string('menu_pict')->default('images/profile.png');
            $table->string('menu_pict1')->default('images/profile.png');
            $table->string('location_pict')->default('images/profile.png');
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
        Schema::dropIfExists('coffee');
    }
}
