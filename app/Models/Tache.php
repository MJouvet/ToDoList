<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    //pour indiquer le nom de la table
    protected $table = 'Taches';

    //pour indiquer la clef primaire de la table
    protected $primaryKey ='Id_Tache';

    //on retrouve toutes les colonnes de la table
    protected $fillable = ['Titre_Tache','Date_In_Tache','Date_Out_Tache'];

    /** en mettant false se refuse que la date soit enregistrer 
    * quand on cree ou que l'on modifie un element
    */
    public $timestamps = false;
}
