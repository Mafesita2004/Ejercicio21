<!-- resources/views/viajes/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Viaje</h1>
    <form action="{{ route('viajes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" name="codigo" id="codigo" class="form-control">
        </div>
        <div class="form-group">
            <label for="num_plazas">Número de Plazas</label>
            <input type="number" name="num_plazas" id="num_plazas" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control">
        </div>
        <div class="form-group">
            <label for="otros_datos">Otros Datos</label>
            <textarea name="otros_datos" id="otros_datos" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="viajero_id">Viajero</label>
            <select name="viajero_id" id="viajero_id" class="form-control">
                @foreach($viajeros as $viajero)
                    <option value="{{ $viajero->id }}">{{ $viajero->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
