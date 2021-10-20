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
            $table->String('about_banner_status')->nullable();
            $table->String('about_language_status')->nullable();
            $table->String('about_experience_status')->nullable();
            $table->String('about_traning_status')->nullable();
            $table->String('about_education_status')->nullable();
            $table->String('about_objectives_status')->nullable();
            $table->String('about_expertice_status')->nullable();
            $table->String('about_links_status')->nullable();
            $table->String('about_personal_status')->nullable();
            $table->String('about_declarations_status')->nullable();
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
