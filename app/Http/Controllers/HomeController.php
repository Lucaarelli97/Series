<?php

namespace App\Http\Controllers;

use App\Models\seriesnet;
use App\Models\films;
use App\Models\docus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    //SERIES
    public function freeseries(){
        $series=seriesnet::all();
        return view('seriesfree', compact('series'));
    }

    //PELICULAS
    public function peliculas(){
        $film=films::all();
        return view('peliculas', compact('film'));
    }

     //DOCUMENTALES
     public function docus(){
        $docus=docus::all();
        return view('docus', compact('docus'));
    }
 
   
}
