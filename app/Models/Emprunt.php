<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    use HasFactory;

    protected $fillable=[
        'date_retour','abonne_id','exemplaire_id','etat_exemplaire'
    ];

    public function abonne(){
        return $this->belongsTo(Abonne::class);
    }

    public function exemplaire(){
        return $this->belongsTo(Exemplaire::class);
    }


    
}
