<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Imagen;



class Imagen extends Model
{
	protected $fillable = [
        'descripcion', 'url'
    ];
    
    protected $table = 'imagenes';
}
