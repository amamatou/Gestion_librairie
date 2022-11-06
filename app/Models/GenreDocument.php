<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreDocument extends Model
{
    use HasFactory;

    protected $fillable=[
        'document_id',
        'genre_id',
    ];
}
