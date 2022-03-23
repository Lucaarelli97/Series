<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seriesnet extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Temporadas', 'Director', 'Sinopsis', 'Imagen', 'Tipo'];
}
