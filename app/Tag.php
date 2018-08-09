<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Tag;

class Tag extends Model
{
	protected $table = 'tags';


    protected $fillable=[
    	'descripcion', 'slug'
    ];

    public function posts(){
    	return $this->belongsToMany(post::class); //ua etiqueta tiene y pertenece a n cantidad de posts
    }
}
