<!-- resources/views/viajeros/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Viajeros</h1>
    <a href="{{ route('viajeros.create') }}" class="btn btn-primary">Nuevo Viajero</a>
    <table class="table">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($viajeros as $viajero)
                <tr>
                    <td>{{ $viajero->dni }}</td>
                    <td>{{ $viajero->nombre }}</td>
                    <td>{{ $viajero->direccion }}</td>
                    <td>{{ $viajero->tfno }}</td>
                    <td>
                        <a href="{{ route('viajeros.show', $viajero) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('viajeros.edit', $viajero) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('viajeros.destroy', $viajero) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
