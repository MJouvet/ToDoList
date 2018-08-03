<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /**
      * c'est le schema de la table Tache avec ses differentes colonnes que
      * l'on retrouve dans la base de donnée suite à la migrations
      */
        Schema::create('Taches', function (Blueprint $table) {
            $table->integer('Id_Tache', true);
            $table->string('Titre_Tache')->nullable();
            $table->dateTime('Date_In_Tache')->nullable();
            $table->dateTime('Date_Out_Tache')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Taches');
    }
}
