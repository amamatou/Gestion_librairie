<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuteurVolume extends Model
{
    use HasFactory;

    protected $fillable = [
        'auteur_id',
        'volume_id',
    ];

    

}
