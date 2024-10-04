<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::with('categoria')->get();
        return view('productos.index',[
            'productos' => $productos

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create',[
            'categorias' => $categorias,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $producto = $request->validate([
            'nombre' => 'required|max:25',
            'categoria_id' =>'required|exists:categorias,id',
            'descripcion' =>'required|max:100',
            'stock' =>'required|integer',
            'precio' =>'required|min:1',
            
        ]);
      
        Producto::create($producto);
       return to_route('productos.index')->with('status', 'producto guardado correctamente');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.editform', [
           'producto' => $producto,
           'categorias' => $categorias,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $validate = $request->validate([
            'nombre' => 'required|max:25',
            'categoria_id' =>'required|exists:categorias,id',
            'descripcion' =>'required|max:100',
            'stock' =>'required|integer',
            'precio' =>'required|min:1',
            
        ]);
        
        $producto->update($validate);
      
       
       return to_route('productos.index')->with('status', 'producto guardado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return to_route('productos.index')->with('producto eliminado');
    }
}
