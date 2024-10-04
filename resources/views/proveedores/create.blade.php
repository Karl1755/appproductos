@extends('layouts.layout')
@section('title', 'Todas las categorias')
@section('contenido')
    <h3 class="text-center mb-4">Formulario de Proveedores</h3>

    @if (session('status'))
        
        <div>
            {{ session('status') }}
        </div>
        
    @endif



    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Proveedor</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
            @error('nombre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="contacto" class="form-label">Contacto</label>
            <input type="text" class="form-control" id="contacto" name="contacto" value="{{old('contacto')}}">
            @error('contacto')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

