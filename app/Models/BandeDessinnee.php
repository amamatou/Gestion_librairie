<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandeDessinnee extends Volume
{
    use HasFactory;

    protected $fillable=[
        'volume_id',
        'dessinateur_id'
    ];

    public function volume(){
        return $this->belongsTo(Volume::class);
    }

    public function dessinateur(){
        return $this->belongsTo(Dessinateur::class);
    }
}
