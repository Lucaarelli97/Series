@extends('admin.index')

@section("content")

<h1 class="text-center text-success">{{ __("Listado de Peliculas") }}</h1>




<table class="table table-striped" style="width: 100%">
    <thead>
        <tr>
            <a href="{{route('admin.create')}}" class="btn btn-primary btn-lg mb-4" > + Nueva Pelicula</a>
            <th scope="col">{{ ("Nombre") }}</th>
            <th scope="col">{{ ("Año") }}</th>
            <th scope="col">{{ ("Director") }}</th>
            <th scope="col">{{ ("Sinopsis") }}</th>
            <th scope="col">{{ ("Imagen") }}</th>
            <th scope="col">{{ ("Tipo") }}</th>
 
        </tr>
    </thead>
    <tbody>
        @forelse($films as $films)
        <tr>
            <td>{{ $films->Nombre }}</td>
            <td>{{ $films->Año }}</td>
            <td>{{ $films->Director }}</td>
            <td>{{ $films->Sinopsis }}</td>
            <td>{{ $films->Imagen }}</td>
            <td>{{ $films->Tipo }}</td>
            <td><a href="{{route('admin.edit', $films->id)}}" class="btn btn-primary btn-sm">
            <i class="fa fa-edit"></i></a></td>
            <td>
                <form id="delete-film-{{$films->id }}-form" action="{{route('admin.destroy', $films->id)}}" method="POST" class="hidden">
                    @method('DELETE')
                    @csrf
                </form>

                <button class="btn btn-danger btn-sm" onclick="event.preventDefault() ; 
                document.getElementById('delete-film-{{$films->id }}-form').submit();">
                <i class="fa fa-trash"></i>
                </button>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">
                <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <p><strong class="font-bold">{{ __("No hay peliculas") }}</strong></p>
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