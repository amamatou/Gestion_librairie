<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Personne
{
    use HasFactory;

    protected $fillable = [
        'dateDebut',
        'dateFin',
        'salaire',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
