@extends('layout/template')

@section('title', 'Registrar Alumno | Escuela')

{{-- si no indicamos el valor a lado de contenido, significa que todo lo que este abajo va a tener en contenido --}}
@section('contenido')

    <main>
        <div class="container py-4">
            <h1>{{ $msg }}</h1>
            <a href="{{ url('alumnos') }}" class="btn btn-secondary">Regresar</a>
        </div>
    </main>
