<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistant extends Personnel
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
