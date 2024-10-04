@extends('layouts.layout')
@section('title', 'Todas las categorias')
@section('contenido')
    <h3 class="text-center mb-4">Formulario de Proveedores</h3>

    @if (session('status'))
        
        <div>
            {{ session('status') }}
        </div>
        
    @endif



    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Proveedor</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$proveedor->nombre)}}">
            @error('nombre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="contacto" class="form-label">Contacto</label>
            <input type="text" class="form-control" id="contacto" name="contacto" value="{{old('contacto',$proveedor->contacto)}}">
            @error('contacto')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection

