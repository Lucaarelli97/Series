<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form enctype="multipart/form-data" method="POST" action="{{ $route }}">
        @csrf
        @isset($update)
        @method("PUT")
        @endisset
        <div class="mb-3">
            <label for="nombreserie" class="form-label">Nombre</label>
            <input name="name" value="{{ $seriesnet->Nombre}}" type="text" class="form-control" id="nombreSerie" aria-describedby="nombre">
            @error("name")
            <div class="border text-red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="temporadas" class="form-label">Temporadas</label>
            <input name="temporadas" value="{{ $seriesnet->Temporadas}}" type="text" class="form-control" id="temporadasSerie">
            @error("temporadas")
            <div class="border text-red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input name="director" value="{{ $seriesnet->Director}}" type="text" class="form-control" id="directoriSeries">
            @error("director")
            <div class="border text-red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea name="sinopsis" value="{{ $seriesnet->Sinopsis}}" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $seriesnet->Sinopsis}}</textarea>
            @error("sinopsis")
            <div class="border text-red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input name="imagen" value="{{$seriesnet->Imagen}}" type="file" class="form-control" id="img">
            @error("imagen")
            <div class="border text-red">
                {{ $message }}
            </div>
            @enderror
        </div>
      
        <div class="form-check">
            <input class="form-check-input"  value="Free" type="radio" name="tipo" id="free">
            <label class="form-check-label" for="tipo">
                Free
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="Pago" name="tipo" id="pago" checked>
            <label class="form-check-label" for="tipo">
                Pago
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
</body>

</html>