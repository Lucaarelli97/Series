<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\series;
use Illuminate\Http\Request;
use App\Models\seriesnet;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class SeriesController extends Controller
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
    public function create(){  //abrir formulario para un nuevo registro
        $seriesnet = new seriesnet();
        $title = __("Crear Serie");
        $textButton = __("Crear");
        $route = route("admin.store");
        return view('admin.create', compact("title", "textButton", "route", "seriesnet"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //para guardar en la BBDD el nuevo registro
    {
       // dd(($request));
        $this->validate($request, [
            "name"=> "required|max:30",
            "temporadas" => "nullable|integer|min:1|max:20",
            "director" => "nullable|string|min:1|max:20",
            "sinopsis" => "nullable|string|min:10",
            "imagen" => "required|image|mimes:jpg,gif,png,jpeg",
            //"tipo" => "nullable|string|"
        ]);
        

        seriesnet::create([
            'Nombre'=>$request->input("name"),
            'Temporadas'=>$request->input("temporadas"),
            'Director'=>$request->input("director"),
            'Sinopsis'=>$request->input("sinopsis"),
            'Imagen'=>$request->file("imagen")->store('', 'images'),
            'Tipo'=>$request->input("tipo")
        ]);
        return redirect(url("admin/list_series"))
        ->with("success", __("Serie añadida!"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(seriesnet $seriesnet) //visualizar un solo registro al detalle
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //abrir formulario para edicion de un registro
    {
        $seriesnet = seriesnet::find($id);
        //dd($seriesnet);
        $update = true;
        $title = __("Editar Serie");
        $textButton = __("Actualizar");
        $route = route("admin.update", $seriesnet -> id);
        return view("admin.edit", compact("update", "title", "textButton", "route", "seriesnet"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //actualizar la informacion en la BBDD
    {

        $this->validate($request, [
            "name"=> "required|max:30",
            "temporadas" => "nullable|integer|min:1|max:20",
            "director" => "nullable|string|min:1|max:20",
            "sinopsis" => "nullable|string|min:10",
            "imagen" => "required|image|mimes:jpg,gif,png,jpeg",
            "tipo" => "nullable|string|min:1|max:4"
        ]);
        
        
        $seriesnet = seriesnet::find($id);
        $seriesnet-> Nombre = $request->get('name');
        $seriesnet-> Temporadas = $request->get('temporadas');
        $seriesnet-> Director = $request->get('director');
        $seriesnet-> Sinopsis = $request->get('sinopsis');
        if($request->hasFile('imagen')){
            Storage::disk('images')->delete('images/'.$seriesnet->Imagen);
            $seriesnet-> Imagen = $request->file('imagen')->store('','images');
        }
        $seriesnet-> Tipo = $request->get('tipo');

        $seriesnet-> save();
        return redirect(url("admin/list_series"))
        ->with("success", __("Serie actualizada!"));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id) //eliminar
    {
        $seriesnet = seriesnet::find($id);
        $seriesnet->delete();
        return back()->with("success", __("Series eliminado!"));
    }

    
}
