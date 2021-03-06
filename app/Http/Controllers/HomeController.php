<?php

namespace App\Http\Controllers;

use App\Models\seriesnet;
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

    public function freeseries()
    {
        $series=seriesnet::all();
        return view('seriesfree', compact('series'));
    }

 
   
}
