<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_views', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            //banner part
            $table->string('banner_title_1st')->nullable();
            $table->string('banner_title_2nd')->nullable();
            $table->string('banner_description')->nullable();
            $table->string('homeBannerImage')->nullable();
            $table->string('banner_status')->nullable();

            //motivation part
            $table->string('motivation_title')->nullable();
            $table->string('motivation_description')->nullable();
            $table->string('motivation_status')->nullable();

            //Skills and Works Status
            $table->string('works_status')->nullable();
            $table->string('skill_status')->nullable();
            
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
        Schema::dropIfExists('home_views');
    }
}
