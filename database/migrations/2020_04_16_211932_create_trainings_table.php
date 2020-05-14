<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('language');
            $table->string('description');
            $table->date('starting');
            $table->date('end');
            $table->string('location');
            $table->string('organizer');

            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('distributor');
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
        Schema::dropIfExists('trainings');
    }
}
