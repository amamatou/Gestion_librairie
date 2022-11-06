<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dessinateur extends Personne
{
    use HasFactory;

    protected $fillable=[
        'personne_id'
    ];


    public function personne(){
        return $this->belongsTo(Person::class);
    }

    public function bandeDessinnee(){
        return $this->hasMany(BandeDessinnee::class);
    }
}
