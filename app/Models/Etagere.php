<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etagere extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'rayon_id'
    ];


    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

    public function exempleire()
    {
        return $this->hasMany(Exemplaire::class);
    }


}
