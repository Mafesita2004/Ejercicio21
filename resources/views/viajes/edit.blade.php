<!-- resources/views/viajes/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Viaje</h1>
    <form action="{{ route('viajes.update', $viaje) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" name="codigo" id="codigo" class="form-control" value="{{ $viaje->codigo }}">
        </div>
        <div class="form-group">
            <label for="num_plazas">Número de Plazas</label>
            <input type="number" name="num_plazas" id="num_plazas" class="form-control" value="{{ $viaje->num_plazas }}">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $viaje->fecha }}">
        </div>
        <div class="form-group">
            <label for="otros_datos">Otros Datos</label>
            <textarea name="otros_datos" id="otros_datos" class="form-control">{{ $viaje->otros_datos }}</textarea>
        </div>
        <div class="form-group">
            <label for="viajero_id">Viajero</label>
            <select name="viajero_id" id="viajero_id" class="form-control">
                @foreach($viajeros as $viajero)
                    <option value="{{ $viajero->id }}" {{ $viaje->viajero_id == $viajero->id ? 'selected' : '' }}>{{ $viajero->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
