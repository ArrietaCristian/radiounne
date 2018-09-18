<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\post;


// use Spatie\Sluggable\HasSlug;
// use Spatie\Sluggable\SlugOptions;

class post extends Model
{

	 // use HasSlug; //Aqui es donde aplicamos el trait

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



    
    /**
    * Este es el método el cual nos indica el trait y esperamos devolver 
    * un objeto SlugOptions.
    */
 
//     public function getSlugOptions() : SlugOptions
//     {
//         return SlugOptions::create()
//             ->generateSlugsFrom('titulo')
//             ->saveSlugsTo('slug')
//             ->slugsShouldBeNoLongerThan(100); //No mas de 100 caracteres.
//     }


// public function scopeFindBySlug($query, $slug)
// {
//     $query->where('slug', $slug)->get();
// }


}
