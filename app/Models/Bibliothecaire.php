<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bibliothecaire extends Assistant
{
    use HasFactory;

    protected $fillable = [
        'personnel_id'
    ];

    public function personnel()
    {
        return $this->belongsTo(Personnel::class);
    }
}
