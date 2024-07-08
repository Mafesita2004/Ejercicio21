<!-- resources/views/viajeros/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Viajero</h1>
    <table class="table">
        <tr>
            <th>DNI</th>
            <td>{{ $viajero->dni }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $viajero->nombre }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $viajero->direccion }}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>{{ $viajero->tfno }}</td>
        </tr>
    </table>
    <a href="{{ route('viajeros.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
