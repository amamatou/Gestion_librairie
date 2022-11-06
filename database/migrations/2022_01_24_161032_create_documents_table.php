<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("titre");
            $table->text("description");
            $table->boolean("empruntable");
            $table->integer("anneePublication");
            $table->text("couverture");

            $table->unsignedBigInteger('editeur_id');
            $table->foreign('editeur_id')
                ->references('id')
                ->on('editeurs')
                ->onDelete('restrict')
                ->onUpdate('restrict');

                $table->unsignedBigInteger('genre_id');
                $table->foreign('genre_id')
                    ->references('id')
                    ->on('editeurs')
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
        Schema::dropIfExists('documents');
    }
}
