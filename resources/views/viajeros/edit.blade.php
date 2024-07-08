<!-- resources/views/viajeros/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Viajero</h1>
    <form action="{{ route('viajeros.update', $viajero) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" class="form-control" value="{{ $viajero->dni }}">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $viajero->nombre }}">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $viajero->direccion }}">
        </div>
        <div class="form-group">
            <label for="tfno">Teléfono</label>
            <input type="text" name="tfno" id="tfno" class="form-control" value="{{ $viajero->tfno }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
