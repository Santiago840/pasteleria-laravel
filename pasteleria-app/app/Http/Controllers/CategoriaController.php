<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Gate;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Categoria/Index', [
            'categorias' => Categoria::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
        ]);

        Categoria::create($validated);

        return redirect(route('categorias.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria):RedirectResponse{
        Gate::authorize('update', $categoria);

        $categoria->update();

        return redirect(route('categorias.index'));
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria):RedirectResponse
    {
        Gate::authorize('delete', $categoria);
        $categoria->delete();

        return redirect(route('categorias.index'));
    }
}
