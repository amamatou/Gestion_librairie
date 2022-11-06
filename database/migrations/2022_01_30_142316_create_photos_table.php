<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('path');
            $table->unsignedBigInteger('actualite_id');
            $table->timestamps();

            $table->foreign('actualite_id')
                  ->references('id')
                  ->on('actualites')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
