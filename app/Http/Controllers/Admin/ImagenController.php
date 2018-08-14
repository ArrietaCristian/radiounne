<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImagenStoreRequest;
use App\Http\Requests\ImagenUpdateRequest;
use Illuminate\Support\Facades\Storage;

use App\Imagen;

class ImagenController extends Controller
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
        $c=Imagen::orderBy('id', 'desc')->paginate(15);
        $Imagen = Imagen::orderBy('id', 'desc')->get();

        
        return view('Admin.imagenes.index', array('imagenes' => $c,'img' => $Imagen));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Imagen = Imagen::orderBy('id', 'desc')->get();
    return view('Admin.imagenes.create', array('img' => $Imagen));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImagenStoreRequest $request)
    {
        $imagen=Imagen::create($request->all());

        //image
        if($request->file('url')){
            $path=Storage::disk('public')->put('img', $request->file('url'));

            $imagen->fill(['url'=>asset($path)])->save();
        }

        return redirect()->route('imagenesRADIOUNNE997.index', $imagen->id)->with('info', 'Categoria creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagen=Imagen::find($id);

        return view('admin.imagenes.show', compact('imagen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imagen=Imagen::find($id);

        return view('admin.imagenes.edit', compact('imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImagenUpdateRequest $request, $id)
    {
        $imagen=Imagen::find($id);

        $imagen->fill($request->all())->save();

         return redirect()->route('imagenesRADIOUNNE997.edit', $imagen->id)->with('info', 'Categoria actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen=Imagen::find($id)->delete();

        return back()->with('info', 'eliminado correctamente');
    }
}
