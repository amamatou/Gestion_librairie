<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function etagere(){
        return $this->hasMany(Etagere::class);
    }
}
