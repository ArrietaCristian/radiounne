<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Category extends Model
{
	
protected $table = 'categories';
    protected $fillable=[
    	'descripcion', 'slug'
    ];

    

    public function posts(){
    	return $this->hasMany(post::class); //una categoria puede tener n cantidad de posts

    }
}
