<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('company_name')->nullable();
            $table->string('designition')->nullable();
            $table->string('form_date')->nullable();
            $table->string('to_date')->nullable();
            $table->string('description')->nullable();
            $table->string('duration')->nullable();
            $table->string('aboutExperienceImage')->nullable();
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
        Schema::dropIfExists('experiences');
    }
}
