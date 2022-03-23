@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
        @endif

            <div class="d-flex justify-content-center row">
            @forelse($series as $seriesnet)
            <div class="col-xs-6 col-sm-4 col-md-3 text-center d-flex flex-column align-items-center mb-5">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-white d-flex justify-content-center mb-2">{{ $seriesnet->Nombre }}</h2>
                    </div>
                        <img class="img-fluid" src="{{ $seriesnet->Imagen}}">
                    </a>
                </div>
            @empty
                <tr>
                    <td colspan="4">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ ("No hay ninguna serie") }}</strong></p>
                            <span class="block sm:inline">{{ ("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            @endforelse
            </div>
         
    </div>
</main>
@endsection