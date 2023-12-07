<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->longText('description');
            $table->string('email');
            $table->string('address');
            $table->string('pri_number');
            $table->string('sec_number')->nullable();
            $table->string('facebookLink')->nullable();
            $table->string('twitterLink')->nullable();
            $table->string('linkdinlink')->nullable();
            $table->string('instalink')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
