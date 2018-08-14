<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'index');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/index', 'PostController@getIndex')->name('index');

Route::get('/post', 'PostController@getIndex');


// Route::get('/post', 'ImagenController@getImagen');

Route::get('/post/show/{id}', 'PostController@getShow');


Route::get('/post/create', 'PostController@getCreate');

// Route::post('/img', 'PostController@ImgCab');

Route::get('/post/edit/{id}', 'PostController@getEdit');

Route::get('/post/prog', 'PostController@getProg');

Route::get('/post/contacto', 'PostController@getContacto');

Route::get('/post/anteriores', 'PostController@anteriores');


Route::get('post/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('search')));
    $route = 'post/search/'.$search;
    return redirect($route);
});
Route::get('post/search/{search}', 'PostController@search');





// Route::get('/post/show/{slug}', 'PostController@getSlug');

Route::get('post/category/{slug}', 'PostController@getCategory')->name('category');

 Route::get('post/etiqueta/{slug}', 'PostController@getTag')->name('etiqueta');


//admin
Route::get('tags', 'Admin\TagController@index');
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
Route::resource('imagenesRADIOUNNE997', 'Admin\ImagenController');