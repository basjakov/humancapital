<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainingbooks', function (Blueprint $table) {
            $table->id();
            $table->integer('training_id');
            $table->string('name');
            $table->string('lastname');
            $table->string('age');
            $table->string('email');
            $table->string('phone');

            
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
        Schema::dropIfExists('trainingbooks');
    }
}
