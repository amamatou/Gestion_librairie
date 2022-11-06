<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Volume
{
    use HasFactory;

    protected $fillable=[
        'volume_id',
    ];

    public function volume(){
        return $this->belongsTo(Volume::class);
    }
}
