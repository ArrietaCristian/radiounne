<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imagen;

class ImagenController extends Controller
{
    public function getImagen()
    {

    	$Imagen = Imagen::orderBy('id', 'desc')->get();

    	// dd($Imagen);

    	 // $Imagen = Imagen::find(11);
                            
    	return view('layouts.imgCabecera', array('img' => $Imagen));
    }

}