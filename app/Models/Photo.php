<?php

namespace App\Models;
use App\Models\Actualite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['nom','path','actualite_id'];
    use HasFactory;

    public function actualite()
    {
        return $this->belongsTo(Actualite::class);
    }
}
 
