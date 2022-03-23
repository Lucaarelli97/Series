@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Panel de Administrador</h1>
@stop

@section('content')
    <p class="text-center">Bienvenido al panel de Administrador, aqui podrás ver tanto el listado de usuarios como el de series, así como poder editar y eliminar series.
    </p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop