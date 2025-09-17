@extends('layouts.app')

@section('content')
    <h1 class= "my-4"> Lista de Autos </h1>
    <a href="{{route("autos.create")}}" class="btn btn-primary mb-3"> Nuevo Auto </a>
    <table class="table"
        <thead>
            <tr>
                <tr> Marca </tr>
                <tr> Modelo </tr>
                <tr> Año </tr>
                <tr> Acciones </tr>
            </tr>
        </thead>
        <tbody>
            @foreach ($autos as $auto)
                
            @endforeach
        </tbody>

@endsection