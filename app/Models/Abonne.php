<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Abonne extends User
{
    use HasFactory;

    protected $fillable = [
        'dateInscription',
        'dateRenouvellement',
        'user_id',
        'supprimer',
        'paye'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function enfant()
    {
        return $this->hasOne(Enfant::class);
    }

    public function etudiant()
    {
        return $this->hasOne(Etudiant::class);
    }

    public function etuadulteAdiant()
    {
        return $this->hasOne(Adulte::class);
    }

    public function exemplaire(){
        return $this->belongsToMany(Exemplaire::class);
    }
}
