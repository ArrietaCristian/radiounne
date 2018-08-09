<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\post;

class post extends Model
{

	protected $fillable=[
		'user_id', 'category_id', 'descripcion', 'slug', 'titulo', 'cabeceraimagen', 'urlmultimedia', 'texto', 'status'
	];

	public function tags(){
		return $this->belongsToMany(Tag::class); //un posts tiene y pertenece a n etiquetas
	}


	public function user(){
		return $this->belongsTo(User::class); //un post pertenece a un usuario

	}

	public function category(){
		return $this->belongsTo(Category::class); //un post pertenece a una categoria

	}



}
