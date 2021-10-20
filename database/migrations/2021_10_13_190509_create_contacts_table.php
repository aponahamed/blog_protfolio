<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('banner_title')->nullable();
            $table->string('banner_sub_title')->nullable();
            $table->string('active_hours')->nullable();
            $table->string('time_duration')->nullable();
            $table->string('description')->nullable();
            $table->string('contactFeatureImage')->nullable();
            $table->string('contacts_banner_status')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
