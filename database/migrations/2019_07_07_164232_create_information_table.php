<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('full_name');
             $table->string('father_name');
             $table->string('mother_name');
             $table->text('present_address');
             $table->text('permanent_address')->nullable();
             $table->string('date_of_birth')->nullable();
             $table->string('height')->nullable();
             $table->string('religion')->nullable();
             $table->string('marital_status')->nullable();
             $table->string('nationality')->nullable();
             $table->string('location')->nullable();
             $table->string('last_degree')->nullable();
             $table->string('professional_degree')->nullable();
             $table->string('phone');
             $table->string('email')->nullable();
             $table->string('website')->nullable();
             $table->string('career_level')->nullable();
             $table->string('experience')->nullable();
             $table->text('summary')->nullable();
             $table->string('image')->nullable();
             $table->string('pdf')->nullable();
             $table->string('qrimage')->nullable();
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
        Schema::dropIfExists('information');
    }
}
