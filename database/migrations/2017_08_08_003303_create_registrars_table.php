<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 50); 
            $table->string('last_name', 50);
            $table->string('email', 64);
            $table->string('phone', 15);
            $table->integer('governorate');
            $table->integer('area');
            $table->integer('university');
            $table->integer('graduation_year');
            $table->integer('profession');
            $table->boolean('specialization');
            $table->text('notes')->nullable();;
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
        Schema::dropIfExists('registrars');
    }
}
