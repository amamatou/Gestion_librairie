<?php

namespace App\Models;
use App\Models\Photo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = ['titre','contenu'];
    use HasFactory;

    public function photo()
    {
        return $this->hasOne(Photo::class);
    }
}