<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRappelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /**
      * c'est le schema de la table Rappels avec ses differentes colonnes que
      * l'on retrouve dans la base de donnée suite à la migrations
      */
        Schema::create('Rappels', function (Blueprint $table) {
            $table->integer('Id_Rappel', true);
            $table->string('Titre_Rappel')->nullable();
            $table->DateTime('Date_Rappel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Rappels');
    }
}
