@extends('layouts.layout')
@section('title', 'Todas las categorias')
@section('contenido')
    <h3 class="text-center mb-4">Formulario de Productos</h3>

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif



    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre"
                value="{{ old('nombre', $producto->nombre) }}">
            @error('nombre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion"
                value="{{ old('descripcion', $producto->descripcion) }}">
            @error('descripcion')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio"
                value="{{ old('precio', $producto->precio) }}">
            @error('precio')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock"
                value="{{ old('stock', $producto->stock) }}">
            @error('stock')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!--Categorias-->
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select name="categoria_id" id="categoria_id" class="form-control">
                <option value=""{{ old('categoria_id') == '' ? 'selected' : '' }}>Seleccione la categoria</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}"
                        {{ old('categoria_id', $producto->categoria_id) == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}</option>
                @endforeach
            </select>


            @error('categoria_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
@endsection
