<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Adulte extends Abonne
{
    protected $fillable = ['abonne_id'];
    use HasFactory;



    public function abonne()
    {
        return $this->belongsTo(Abonne::class);
    }
}
