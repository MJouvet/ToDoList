<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rappel extends Model
{
  //pour indiquer le nom de la table
  protected $table = 'Rappels';

  //pour indiquer la clef primaire de la table
  protected $primaryKey ='Id_Rappel';

  //on retrouve toutes les colonnes de la table
  protected $fillable = ['Titre_Rappel','Date_Rappel'];

  /** en mettant false se refuse que la date soit enregistrer
  * quand on cree ou que l'on modifie un element
  */
  public $timestamps = false;
}
