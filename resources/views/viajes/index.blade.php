<!-- resources/views/viajes/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Viajes</h1>
    <a href="{{ route('viajes.create') }}" class="btn btn-primary">Nuevo Viaje</a>
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Número de Plazas</th>
                <th>Fecha</th>
                <th>Viajero</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($viajes as $viaje)
                <tr>
                    <td>{{ $viaje->codigo }}</td>
                    <td>{{ $viaje->num_plazas }}</td>
                    <td>{{ $viaje->fecha }}</td>
                    <td>{{ $viaje->viajero->nombre }}</td>
                    <td>
                        <a href="{{ route('viajes.show', $viaje) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('viajes.edit', $viaje) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('viajes.destroy', $viaje) }}" method="POST" style="display:inline-block;">
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
