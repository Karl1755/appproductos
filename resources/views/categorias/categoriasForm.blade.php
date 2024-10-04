@extends('layouts.layout')
@section('title', 'Todas las categorias')
@section('contenido')
    <h3 class="text-center mb-4">Formulario de Categorias</h3>

    @if (session('status'))
        
        <div>
            {{ session('status') }}
        </div>
        
    @endif



    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Categoria</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
            @error('nombre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('descripcion')}}">
            @error('descripcion')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
