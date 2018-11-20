<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;

use App\Tag;
use App\Imagen;
use DB;

class TagController extends Controller
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
        $tags=Tag::orderBy('id', 'desc')->get();

        $Imagen = Imagen::orderBy('id', 'desc')->get();  

        
        return view('Admin.tags.index', array('tags' => $tags, 'img' => $Imagen));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $img = Imagen::orderBy('id', 'desc')->get(); 
        

    return view('Admin.tags.create', compact('img'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
        $tag=Tag::create($request->all());

        return redirect()->route('tags.index', $tag->id)->with('info', 'Etiqueta creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag=Tag::find($id);
       
        $img = Imagen::orderBy('id', 'desc')->get(); 

        return view('admin.tags.show', compact('tag', 'img'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag=Tag::find($id);

        $img = Imagen::orderBy('id', 'desc')->get(); 

        return view('admin.tags.edit', compact('tag', 'img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, $id)
    {
        $tag=Tag::find($id);

        $tag->fill($request->all())->save(); 

         return redirect()->route('tags.index', $tag->id)->with('info', 'Etiqueta actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag=Tag::find($id)->delete();

        return back()->with('info', 'eliminado correctamente');
    }
}
