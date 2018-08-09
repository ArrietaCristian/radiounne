<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;

use App\post;
use App\Category;
use App\Tag;
use App\Imagen;
use DB;

class PostController extends Controller
{

    public function __contruct(){

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p=post::orderBy('id', 'desc')->paginate(10); // ->where('user_id', auth()->user()->id)  si quiero que solo traiga post del usuario logueado

        $Imagen = Imagen::orderBy('id', 'desc')->get();                                      

       
        return view('Admin.posts.index', array('posts' => $p, 'img' => $Imagen));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::orderBy('descripcion', 'asc')->pluck('descripcion', 'id');  //pluck solo me trae los atributos especificados
        $tags= Tag::orderBy('descripcion', 'asc')->get();

        $img = Imagen::orderBy('id', 'desc')->get(); 

    return view('Admin.posts.create', compact('categories', 'tags', 'img'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post=post::create($request->all());

        //image
        if($request->file('cabeceraimagen')){
            $path=Storage::disk('public')->put('image', $request->file('cabeceraimagen'));

            $post->fill(['cabeceraimagen'=>asset($path)])->save();
        }

        //audio/video
        if($request->file('urlmultimedia')){
            $path=Storage::disk('public')->put('multimedia', $request->file('urlmultimedia'));

            $post->fill(['urlmultimedia'=>asset($path)])->save();
        }

        //tag
         $post->tags()->attach($request->get('tags'));

        return redirect()->route('posts.index', $post->id)->with('info', 'Post creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=post::find($id);

        $Imagen = Imagen::orderBy('id', 'desc')->get(); 

        return view('admin.posts.show',  array('post' => $post, 'img' => $Imagen));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories= Category::orderBy('descripcion', 'asc')->pluck('descripcion', 'id');  //pluck solo me trae los atributos especificados
        $tags= Tag::orderBy('descripcion', 'asc')->get();
        $post=post::find($id);

        $img = Imagen::orderBy('id', 'desc')->get();

        return view('admin.posts.edit', compact('post', 'categories', 'tags', 'img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post=post::find($id);

        $post->fill($request->all())->save();

        //image
        if($request->file('cabeceraimagen')){
            $path=Storage::disk('public')->put('image', $request->file('cabeceraimagen'));

            $post->fill(['cabeceraimagen'=>asset($path)])->save();
        }

         //audio/video
        if($request->file('urlmultimedia')){
            $path=Storage::disk('public')->put('multimedia', $request->file('urlmultimedia'));

            $post->fill(['urlmultimedia'=>asset($path)])->save();
        }

        //tag
         $post->tags()->sync($request->get('tags'));

         return redirect()->route('posts.edit', $post->id)->with('info', 'Post actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=post::find($id)->delete();

        return back()->with('info', 'eliminado correctamente');
    }
}
