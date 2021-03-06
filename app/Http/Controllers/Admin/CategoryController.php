<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

use App\Category;
use App\Imagen;
use DB;

class CategoryController extends Controller
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
        $c=Category::orderBy('id', 'desc')->get();

        $Imagen = Imagen::orderBy('id', 'desc')->get(); 

        
        return view('Admin.categories.index', array('categories' => $c, 'img' => $Imagen));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $img = Imagen::orderBy('id', 'desc')->get();

    return view('Admin.categories.create', compact('img'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $category=Category::create($request->all());

        return redirect()->route('categories.index', $category->id)->with('info', 'Categoria creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=Category::find($id);

        $img = Imagen::orderBy('id', 'desc')->get(); 

        return view('admin.categories.show', compact('category', 'img'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);

        $img = Imagen::orderBy('id', 'desc')->get(); 

        return view('admin.categories.edit', compact('category', 'img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category=Category::find($id);

        $category->fill($request->all())->save();

         return redirect()->route('categories.index', $category->id)->with('info', 'Categoria actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id)->delete();

        return back()->with('info', 'eliminado correctamente');
    }
}
