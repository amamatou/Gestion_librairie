<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'niveauScolaire',
        'etablissement',
        'abonne_id'
    ];

    public function abonne()
    {
        return $this->belongsTo(Abonne::class);
    }

}
