<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Abonne
{
    use HasFactory;

    protected $fillable = [
        'niveauScolaire',
        'etablissement',
        'titulaire_id',
        'abonne_id',
    ];

    public function abonne()
    {
        return $this->belongsTo(Abonne::class);
    }

    public function persone()
    {
        return $this->belongsTo(Personne::class);
    }
}


