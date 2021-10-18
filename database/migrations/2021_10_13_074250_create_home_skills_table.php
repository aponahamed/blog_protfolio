<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_skills', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('skill_title')->nullable();
            $table->string('skill_percentage')->nullable();
            $table->string('homeSkillImage')->nullable();
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
        Schema::dropIfExists('home_skills');
    }
}
