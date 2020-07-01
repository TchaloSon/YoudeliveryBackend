<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
	protected  $table='utilisateurs';
	
	public $timestamps=true;

    protected $fillable = [
        'nom', 'email', 'telephone','prenom','adresse',
    ];

    
}
