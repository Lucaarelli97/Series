<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\films;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $films = new films();
        $title = __("Crear Pelicula");
        $textButton = __("Crear");
        $route = route("admin.store");
        return view('admin.create', compact("title", "textButton", "route", "films"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, [
            "name"=> "required|max:30",
            "año" => "nullable|integer|min:1000|max:2023",
            "director" => "nullable|string|min:1|max:20",
            "sinopsis" => "nullable|string|min:10",
            "imagen" => "required|image|mimes:jpg,gif,png,jpeg",
            //"tipo" => "nullable|string|"
        ]);

        films::create([
            'Nombre'=>$request->input("name"),
            'Año'=>$request->input("año"),
            'Director'=>$request->input("director"),
            'Sinopsis'=>$request->input("sinopsis"),
            'Imagen'=>$request->file("imagen")->store('', 'images'),
            'Tipo'=>$request->input("tipo")
        ]);
        return redirect(url("admin/list_films"))
        ->with("success", __("Pelicula añadida!"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $films = films::find($id);
        //dd($films);
        $update = true;
        $title = __("Editar Pelicula");
        $textButton = __("Actualizar");
        $route = route("admin.update", $films -> id);
        return view("admin.edit", compact("update", "title", "textButton", "route", "films"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $this->validate($request, [
            "name"=> "required|max:30",
            "año" => "nullable|integer|min:1|max:2024",
            "director" => "nullable|string|min:1|max:20",
            "sinopsis" => "nullable|string|min:10",
            "imagen" => "required|image|mimes:jpg,gif,png,jpeg",
            "tipo" => "nullable|string|min:1|max:4"
        ]);
        
        
        $films = films::find($id);
        $films-> Nombre = $request->get('name');
        $films-> Año = $request->get('año');
        $films-> Director = $request->get('director');
        $films-> Sinopsis = $request->get('sinopsis');
        if($request->hasFile('imagen')){
            Storage::disk('images')->delete('images/'.$films->Imagen);
            $films-> Imagen = $request->file('imagen')->store('','images');
        }
        $films-> Tipo = $request->get('tipo');

        $films-> save();
        return redirect(url("admin/list_films"))
        ->with("success", __("Peliculas actualizada!"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $films = films::find($id);
        $films->delete();
        return back()->with("success", __("Pelicula eliminado!"));
    }
}