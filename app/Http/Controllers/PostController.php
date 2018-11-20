<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Category;
use App\Tag;
use App\Imagen;

use Cache;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;





class PostController extends Controller
{
    public function getIndex()
    {    	
    	
    	
    	$P = post::orderBy('id', 'desc')->get();
    	$Imagen = Imagen::orderBy('id', 'desc')->get();
    	$tv=post::orderBy('totalV', 'desc')->get();
    	
                            
    	return view('post.index', array('POST' => $P,'img' => $Imagen, 'TV'=>$tv,));
    }

    public function getShow($id)
{
	$PP = post::orderBy('id', 'desc')->get();
	$Imagen = Imagen::orderBy('id', 'desc')->get();
	$P = post::findOrFail($id);
	$tv=post::orderBy('totalV', 'desc')->get();

	if(Cache::has($id) == false)
		{
			Cache::add($id, 'contador', 0.30);
			$P->totalV+=1;
			$P->save();
		}

	

    return view('post.show', array('POST' => $PP,'Post' => $P,'img' => $Imagen, 'TV'=>$tv,));
}

public function getCreate()
    {
    	return view('post.create');
    }

public function store(Request $Request){

	$post = new post;
	$post->titulo=$Request->input('titulo');
	$post->urlmultimedia=$Request->input('urlmultimedia');
	$post->cabeceraimagen=$Request->input('cabeceraimagen');
	$post->texto=$Request->input('texto');
	$post->save();

	//$post=post::create($Request->all());

	//image
	if ($Request->file('urlmultimedia')) {
		$path= Storage::disk('public')->put('image', $Request->file('urlmultimedia'));
		$post->fill(['urlmultimedia'=>asset($path)])->save();
	}

	return 'completado';

}

public function update(Request $Request, $id){

	$post=post::find($id);
	$post->fill($Request->all())->save();

	//image
	if ($Request->file('urlmultimedia')) {
		$path= Storage::disk('public')->put('image', $Request->file('urlmultimedia'));
		$post->fill(['urlmultimedia'=>asset($path)])->save();
	}
}


public function getEdit($id)
{
    return view('post.edit');
}

public function getSlug($slug){

	$post = post::where('slug', $slug)->first();
	return view('post.show', compact('Post'));
}

public function getCategory($slug){
	$category = Category::where('slug', $slug)->pluck('id')->first();
	$posts = post::where('category_id', $category)->orderBy('id', 'desc')->paginate(7);
	$tv=post::orderBy('totalV', 'desc')->get();
	$P = post::orderBy('id', 'desc')->get();

	$Imagen = Imagen::orderBy('id', 'desc')->get();
	
	return view('post.category', array('POSTS' => $posts, 'img' => $Imagen, 'POST' => $P,'TV'=>$tv,));

}

public function getTag($slug){
	
	$posts = post::whereHas('tags', function($query) use($slug){
		$query->where('slug', $slug);
	})->orderBy('id', 'desc')->paginate(7);

	$Imagen = Imagen::orderBy('id', 'desc')->get();
	$tv=post::orderBy('totalV', 'desc')->get();
	$P = post::orderBy('id', 'desc')->get();

	return view('post.tag', array('posts' => $posts, 'img' => $Imagen, 'POST' => $P,'TV'=>$tv,));

}

public function getProg(){


	$tv=post::orderBy('totalV', 'desc')->get();
	$P = post::orderBy('id', 'desc')->get();
	$Imagen = Imagen::orderBy('id', 'desc')->get();

	return view('post.programacion', array('POST' => $P,'img' => $Imagen,'TV'=>$tv));
}

public function getContacto(){

	 // $Imagen = Imagen::find(12);
	$tv=post::orderBy('totalV', 'desc')->get();
	$P = post::orderBy('id', 'desc')->get();
	$Imagen = Imagen::orderBy('id', 'desc')->get();


	return view('post.contacto', array('POST' => $P,'img' => $Imagen,'TV'=>$tv));
}

 public function search($search){
 		
        $search = urldecode($search);
        $comments = post::select()
                ->where('titulo', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->get();
        $Imagen = Imagen::orderBy('id', 'desc')->get();
        $tv=post::orderBy('totalV', 'desc')->get();
	$P = post::orderBy('id', 'desc')->get();
        
        if (count($comments) == 0){
            return view('post.search', array('POST' => $P,'TV'=>$tv,'img' => $Imagen, 'message' => 'no hay resultados que mostrar', 'search' => $search));
            // ->with('message', 'No hay resultados que mostrar')
            // ->with('search', $search);
        } else{
            return view('post.search', array('comments' => $comments, 'search' => $search, 'img' => $Imagen,'POST' => $P,'TV'=>$tv,));
            // ->with('comments', $comments)
            // ->with('search', $search);
        }

    }

  

    public function anteriores(){

    	 $tv=post::orderBy('totalV', 'desc')->get();
    	$P = post::orderBy('id', 'desc')->paginate(7);
    	$Imagen = Imagen::orderBy('id', 'desc')->get();
    	
                            
    	return view('post.anteriores', array('POST' => $P,'img' => $Imagen,'TV'=>$tv,));
    }

    

// public function getImagen(){
     

//     	// $Imagen = Imagen::orderBy('id', 'asc')->get();

    	

//     	 $Imagen = Imagen::find(12);

//     	 // dd($Imagen);
                            
//     	return view('Admin.Imagenes.index', array('img' => $Imagen));
//     }

// public function ImgCab()
// {
// 	$Imagen = Imagen::orderBy('id', 'desc')->get();

// 	 // $Imagen = Imagen::find(12);


// 	return view('layouts.app', array('imagen' => $Imagen));
// }


}

