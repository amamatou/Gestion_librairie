<?php

namespace App\Models;

use Faker\Provider\ar_EG\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Personne
{
    use HasFactory;

    protected $fillable=[
        'personne_id'
    ];


    public function personne(){
        return $this->belongsTo(Personne::class);
    }

    public function volumes(){
        return $this->belongsToMany(Volume::class);
    }

    public function volume(){
        return $this->hasMany(Volume::class);
    }
}
