<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('title');
            $table->string('emp_term')->nullable();
            $table->string('language');
            $table->string('category');
            $table->string('company')->nullable();
            $table->integer('salery')->nullable();
            $table->string('job_type');
            $table->string('location');
            $table->longtext('description');
            $table->longtext('Job_responsibilities');
            $table->longtext('qualifications')->nullable();;
            $table->string('level')->nullable();
            $table->string('skills')->nullable();
            $table->date('deadline')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
