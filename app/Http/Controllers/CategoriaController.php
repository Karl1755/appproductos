<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index',[
           'categorias' => $categorias, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.categoriasForm');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'nombre'=> 'required|max:25',
            'descripcion'=> 'required|max:100'
        ]);

        Categoria::create($validate);

        return to_route('categorias.create')->with('status', 'Categoria guardada correctamente');
        
        
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
        return view('categorias.edit',[
            'categoria'=>$categoria
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $validate = $request->validate([
            'nombre' => 'required|max:25',
            'descripcion' => 'required|max:120'
        ]);

        $categoria->nombre = $validate['nombre'];
        $categoria->descripcion = $validate['descripcion'];

        $categoria->save();

        return to_route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return to_route('categorias.index');
    }
}