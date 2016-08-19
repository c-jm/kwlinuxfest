<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rsvp extends Migration
{
    public function up()
    {
        Schema::create('attendees', function(Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('email');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::drop('attendees');
    }
}