@extends('layouts.layout')
@section('title', 'Todas los Proveedores')
@section('contenido')
   @if (session('status'))
        
        <div class="bg-primary text-white p-2 mb-2">
            {{ session('status') }}
        </div>
        
    @endif
    <h3 class="text-center mb-4">Listado de productos</h3>

    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            
            <th scope="col">producto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">stock</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($productos as $producto)
          <tr>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->categoria->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->stock}}</td>
            

            <td>
              <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-warning">Editar</a>
              <form action="{{route('productos.destroy' , $producto->id)}}" method="post" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>



        </tbody>
      </table>
@endsection