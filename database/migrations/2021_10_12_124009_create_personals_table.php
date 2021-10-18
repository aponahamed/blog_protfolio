<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->string('Designition');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('date_of_birth');
            $table->string('maritial_status');
            $table->string('nationality');
            $table->string('national_id_no');
            $table->string('pasport_no');
            $table->string('driving_licence');
            $table->string('religion');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('tagline');
            $table->string('personal_image');
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
        Schema::dropIfExists('personals');
    }
}
