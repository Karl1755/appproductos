<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $proveedores = Proveedor::paginate(10);
    return view('proveedores.index',[
        'proveedores' => $proveedores
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required|max:25',
            'contacto' =>'required|max:10',
        ]);
       $proveedor = new Proveedor();
       $proveedor->nombre = $validate['nombre'];
       $proveedor->contacto = $validate['contacto'];

     


    $proveedor->save();
    return to_route('proveedores.create')->with('status', 'proveedor guardado correctamente');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedore)
    {
       
        return view('proveedores.edit', [
            'proveedor'=> $proveedore

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedore)
    {
        $validate = $request->validate([
            'nombre' => 'required|max:25',
            'contacto' =>'required|max:10',
        ]);
        $proveedore->nombre = $validate['nombre'];
       $proveedore->contacto = $validate['contacto'];

       $proveedore->save();

       return to_route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedore)
    {
       $proveedore->delete();
       return to_route('proveedores.index');

    }
}
