@extends('admin.index')

@section("content")

<h1 class="text-center text-success">{{ __("Listado de Documentales") }}</h1>



<table class="table table-striped" style="width: 100%">
    <thead>
        <tr>
         <a href="" class="btn btn-primary btn-lg mb-4"> + Nuevo Documental</a>
            <th scope="col">{{ ("Nombre") }}</th>
            <th scope="col">{{ ("Año") }}</th>
            <th scope="col">{{ ("Director") }}</th>
            <th scope="col">{{ ("Sinopsis") }}</th>
            <th scope="col">{{ ("Imagen") }}</th>
            <th scope="col">{{ ("Tipo") }}</th>
 
        </tr>
    </thead>
    <tbody>
        @forelse($docus as $docus)
        <tr>

            <td>{{ $docus->Nombre }}</td>
            <td>{{ $docus->Año }}</td>
            <td>{{ $docus->Director }}</td>
            <td>{{ $docus->Sinopsis }}</td>
            <td>{{ $docus->Imagen }}</td>
            <td>{{ $docus->Tipo }}</td>
      
        </tr>
        @empty
        <tr>
            <td colspan="4">
                <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <p><strong class="font-bold">{{ __("No hay documentales") }}</strong></p>
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