<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volume extends Document
{
    use HasFactory;

    protected $fillable=[
        'document_id',
        'categorie_id',
        'nombrePages',
        'isbn',
        'auteur_id'
    ];

    public function document(){
        return $this->belongsTo(Document::class);
    }

    public function auteur(){
        return $this->belongsTo(Auteur::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function exemplaire(){
        return $this->hasMany(Exemplaire::class);
    }

    public function livre(){
        return $this->hasOne(Livre::class);
    }

    public function bandeDessinnee(){
        return $this->hasOne(BandeDessinnee::class);
    }
}
