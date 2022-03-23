<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactaMail;

class ContactaController extends Controller
{
    public function index(){
        return view('contacta.index');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=> 'required|email',
            'mensaje'=>'required',
        ]);
    

    $correo= new ContactaMail($request->all());
    Mail::to('toorasturian@gmail.com')->send($correo);
    return redirect(route('contacta.index'))->with('success', 'Email enviado');
    }
}
