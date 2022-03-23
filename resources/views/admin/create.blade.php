@extends('adminlte::page')

@section('title', 'Nueva Serie')

@section('content_header')
    <h1 class="text-center">Nueva Serie</h1>
@stop

@section('content')
    <div class= "flex justify-center flex-wrap p-4 mt-5">
        @include("admin.form")
    </div>
@stop
