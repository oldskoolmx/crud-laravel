@extends('layout/template')

@section('title', 'Alumnos | Escuela')

{{-- si no indicamos el valor a lado de contenido, significa que todo lo que este abajo va a tener en contenido --}}
@section('contenido')

    <main>
        <div class="container py-4">
            <h2>Listado de Alumnos</h2>
            <a href="{{ url('alumnos/create') }}" class="btn btn-primary btn-sm">Nuevo Registro</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Fecha Nacimiento</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Nivel</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->id }}</td>
                            <td>{{ $alumno->matricula }}</td>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->fecha_nacimiento }}</td>
                            <td>{{ $alumno->telefono }}</td>
                            <td>{{ $alumno->email }}</td>
                            <td>{{ $alumno->nivel->nombre }}</td>
                            <td><a href="{{ url('alumnos/' . $alumno->id . '/edit') }}"
                                    class="btn btn-warning btn-sm">Editar</a></td>
                            <td>
                                <form action="{{ url('alumnos/' . $alumno->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </main>
