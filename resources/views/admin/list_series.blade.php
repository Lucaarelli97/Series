@extends('admin.index')

@section("content")

<h1 class="text-center text-success">{{ __("Listado de Series") }}</h1>



<table class="table table-danger table-striped" style="width: 100%">
    <thead>
        <tr>
            <a href="{{route('admin.create')}}" class="btn btn-primary btn-lg mb-4"> + Nueva Serie</a>
            <th scope="col">{{ ("Nombre") }}</th>
            <th scope="col">{{ ("Temporadas") }}</th>
            <th scope="col">{{ ("Director") }}</th>
            <th scope="col">{{ ("Sinopsis") }}</th>
            <th scope="col">{{ ("Imagen") }}</th>
            <th scope="col">{{ ("Tipo") }}</th>

        </tr>
    </thead>
    <tbody>
        @forelse($seriesnets as $seriesnet)
        <tr>

            <td>{{ $seriesnet->Nombre }}</td>
            <td>{{ $seriesnet->Temporadas }}</td>
            <td>{{ $seriesnet->Director }}</td>
            <td>{{ $seriesnet->Sinopsis }}</td>
            <td>{{ $seriesnet->Imagen }}</td>
            <td>{{ $seriesnet->Tipo }}</td>
            <td><a href="{{route('admin.edit', $seriesnet->id)}}" class="btn btn-primary btn-sm">Editar</a></td>
            <td>
                <form id="delete-serie-{{$seriesnet->id }}-form" action="{{route('admin.destroy', $seriesnet->id)}}" method="POST" class="hidden">
                    @method('DELETE')
                    @csrf
                </form>

                <button class="btn btn-danger btn-sm" onclick="event.preventDefault() ; 
                 document.getElementById('delete-serie-{{$seriesnet->id }}-form').submit();">Eliminar</button>
            </td>



        </tr>
        @empty
        <tr>
            <td colspan="4">
                <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <p><strong class="font-bold">{{ __("No hay series") }}</strong></p>
                    <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                </div>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-3">

</div>
@endsection