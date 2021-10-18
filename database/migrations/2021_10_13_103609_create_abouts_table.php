<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->String('user_id');
            $table->String('about_banner_headding')->nullable();
            $table->String('about_banner_title')->nullable();
            $table->String('about_banner_subtitle')->nullable();
            $table->String('about_banner_description')->nullable();
            $table->String('about_banner_objectives')->nullable();
            $table->String('about_banner_declaration')->nullable();
            $table->String('aboutBannerImage')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
