<?php

// app/Http/Controllers/ViajeroController.php
namespace App\Http\Controllers;

use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    public function index()
    {
        $viajeros = Viajero::all();
        return view('viajeros.index', compact('viajeros'));
    }

    public function create()
    {
        return view('viajeros.create');
    }

    public function store(Request $request)
    {
        Viajero::create($request->all());
        return redirect()->route('viajeros.index');
    }

    public function show(Viajero $viajero)
    {
        return view('viajeros.show', compact('viajero'));
    }

    public function edit(Viajero $viajero)
    {
        return view('viajeros.edit', compact('viajero'));
    }

    public function update(Request $request, Viajero $viajero)
    {
        $viajero->update($request->all());
        return redirect()->route('viajeros.index');
    }

    public function destroy(Viajero $viajero)
    {
        $viajero->delete();
        return redirect()->route('viajeros.index');
    }
}
