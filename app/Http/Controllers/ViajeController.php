<?php

namespace App\Http\Controllers;
use App\Models\Viaje;
use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajes = Viaje::all();
        return view('viajes.index', compact('viajes'));
    }

    public function create()
    {
        $viajeros = Viajero::all();
        return view('viajes.create', compact('viajeros'));
    }

    public function store(Request $request)
    {
        Viaje::create($request->all());
        return redirect()->route('viajes.index');
    }

    public function show(Viaje $viaje)
    {
        return view('viajes.show', compact('viaje'));
    }

    public function edit(Viaje $viaje)
    {
        $viajeros = Viajero::all();
        return view('viajes.edit', compact('viaje', 'viajeros'));
    }

    public function update(Request $request, Viaje $viaje)
    {
        $viaje->update($request->all());
        return redirect()->route('viajes.index');
    }

    public function destroy(Viaje $viaje)
    {
        $viaje->delete();
        return redirect()->route('viajes.index');
    }
}
