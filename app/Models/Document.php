<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'empruntable',
        'anneePublication',
        'couverture',
        'editeur_id',
        'genre_id'
    ];

    public function editeur(){
        return $this->belongsTo(Editeur::class);
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function volume(){
        return $this->hasOne(Volume::class);
    }
}
