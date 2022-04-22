<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\series;
use App\Models\seriesnet;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\films;
use App\Models\docus;


class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    //LISTAR USUARIOS
    public function list_users(){
        $users=User::all();
        return view('admin.list_users', compact('users'));
    }

    //LISTAR SERIES
    public function list_series(){
        $seriesnets=seriesnet::all();
        return view('admin.list_series', compact('seriesnets'));
    }

    //LISTAR PELICULAS
    public function list_films(){
        $films=films::all();
        return view('admin.list_films', compact('films'));
    }

    //LISTAR DOCUMENTALES
    public function list_docus(){
        $docus=docus::all();
        return view('admin.list_docus', compact('docus'));
    }

}
