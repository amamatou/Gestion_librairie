<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_genre', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')
                ->references('id')
                ->on('documents')
                ->onDelete('restrict')
                ->onUpdate('restrict');


            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')
                ->references('id')
                ->on('genres')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_genre');
    }
}
