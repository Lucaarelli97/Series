<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\series;
use App\Models\seriesnet;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function list_users(){
        $users=User::all();
        return view('admin.list_users', compact('users'));
    }

    public function list_series(){
        $seriesnets=seriesnet::all();
        return view('admin.list_series', compact('seriesnets'));
    }

}
