<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('formateur_id');
            $table->string('formateur_name');
            $table->string('content_cours');
            $table->string('name_cours');
            $table->string('specialite_cours');
            $table->string('description_cours');
            $table->string('date_cours');
            $table->string('secteur')->nullable();
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
        Schema::dropIfExists('cours');
    }
}
