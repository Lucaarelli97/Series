<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class films extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Año', 'Director', 'Sinopsis', 'Imagen', 'Tipo'];
}
