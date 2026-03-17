<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 
        'vigencia', 
        'tienda', 
        'precio_original', 
        'precio_descuento'
    ];
}