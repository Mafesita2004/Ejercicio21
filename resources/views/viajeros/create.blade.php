<!-- resources/views/viajeros/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Viajero</h1>
    <form action="{{ route('viajeros.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" class="form-control">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control">
        </div>
        <div class="form-group">
            <label for="tfno">Teléfono</label>
            <input type="text" name="tfno" id="tfno" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
