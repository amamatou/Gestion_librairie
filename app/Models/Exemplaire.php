<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exemplaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'etat',
        'disponibilite',
        'volume_id',
        'etagere_id'
    ];

    public function volume()
    {
        return $this->belongsTo(volume::class);
    }

    public function etagere()
    {
        return $this->belongsTo(Etagere::class);
    }

    public function abonne(){
        return $this->belongsToMany(Abonne::class);
    }

    

}
