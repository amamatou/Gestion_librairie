<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'tel',
        'DateNaissance'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function enfant()
    {
        return $this->hasOne(Enfant::class);
    }

    public function auteur()
    {
        return $this->hasOne(Auteur::class);
    }

    public function editeur()
    {
        return $this->hasOne(Editeur::class);
    }

    public function dessinateur()
    {
        return $this->hasOne(Dessinateur::class);
    }
}
