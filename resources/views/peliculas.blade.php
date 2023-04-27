@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <!--BUSCADOR-->
        <form class="row  input-group sombra mx-5 col-3 text-center" id="buscador"> 
            <input name="buscar" class="form-control col-3" type="search" placeholder="Buscar por tipo" aria-label="Search">
            <button  type="submit">Enviar</button>
        
        </form>
    <!--
            <div class="d-flex justify-content-center row">
            @forelse($film as $films)
            <div class="col-xs-6 col-sm-4 col-md-3 text-center d-flex flex-column align-items-center mb-5">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-white d-flex justify-content-center mb-2">{{ $films->Nombre }}</h2>
                    </div>
                        <img class="img-fluid" src="{{ $films->Imagen}}">
                    </a>
                </div>
            @empty
                <tr>
                    <td colspan="4">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ ("No hay ninguna pelicula") }}</strong></p>
                            <span class="block sm:inline">{{ ("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            @endforelse
            </div>-->
           
            <div class="d-flex justify-content-center row" >
            @forelse($film as $films)
                <div class="col-xs-6 col-sm-4 col-md-2 text-center d-flex flex-column align-items-center mb-5 m-2">
                    <div class="alert alert-dark mt-2">
                            <strong>{{ $films->Nombre }}</strong>
                    </div>
                    <img class="card-img-top" src="{{ $films->Imagen}}">                              
                        <form action = "index.php" method = "post">
                        <div class = " star_content  mt-4" >
                        <input name = "rate" value = "1" type = "radio" class = "star" checked = "checked"/>
                        <input name = "rate" value = "2" type = "radio" class = "star"/>
                        <input name = "rate" value = "3" type = "radio" class = "star"/>
                        <input name = "rate" value = "4" type = "radio" class = "star"/>
                        <input name = "rate" value = "5" type = "radio" class = "star"/>
                            </div>

                        </form >
                    </div>        
                @empty
                    </div>
                </div>
                <tr>
                    <td colspan="4">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ ("No hay ninguna pelicula") }}</strong></p>
                            <span class="block sm:inline">{{ ("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            @endforelse
        </div> 
    </div>
</main>
@endsection