@extends('layouts.layout')
@section('title', 'Todas los Proveedores')
@section('contenido')
    <h3 class="text-center mb-4">Listado de Categorias</h3>

    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            
            <th scope="col">Categorias</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categorias as $categoria)
          <tr>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->descripcion}}</td>
            <td>
              <a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-warning">Editar</a>
              <form action="{{route('categorias.destroy' , $categoria->id)}}" method="post" style="display: inline">
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