<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    //Mostrar lista de ofertas
    public function index()
    {
        $ofertas = Oferta::all();
        return view('ofertas.index', compact('ofertas'));
    }

    // formulario crear nueva oferta
    public function create()
    {
        return view('ofertas.create');
    }

    // guarda nueva oferta 
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'vigencia' => 'required|date',
            'tienda' => 'required|string|max:255',
            'precio_original' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
        ]);

        Oferta::create($request->all());

        return redirect()->route('ofertas.index');
    }

    public function show(Oferta $oferta)
    {
        return view('ofertas.show', compact('oferta'));
    }

    // editar oferta
    public function edit(Oferta $oferta)
    {
        return view('ofertas.edit', compact('oferta'));
    }

    // actualiza base de datos
    public function update(Request $request, Oferta $oferta)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'vigencia' => 'required|date',
            'tienda' => 'required|string|max:255',
            'precio_original' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
        ]);

        $oferta->update($request->all());

        return redirect()->route('ofertas.index');
    }

    // elimina oferta
    public function destroy(Oferta $oferta)
    {
        $oferta->delete();

        return redirect()->route('ofertas.index');
    }
}