@extends('layouts.layout')
@section('title', 'Todas los Proveedores')
@section('contenido')
    <h3 class="text-center mb-4">Listado de Proveedores</h3>
    

    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            
            <th scope="col">Nombre</th>
            <th scope="col">Contacto</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($proveedores as $proveedor)
              <tr>
                <td>{{$proveedor ->nombre}}</td>
                <td>{{$proveedor->contacto}}</td>
                <td>
                  <a href="{{route('proveedores.edit',$proveedor->id)}}" class="btn btn-warning">Editar</a>
                  <form action="{{route('proveedores.destroy', $proveedor->id)}}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                  </form> 
                    
                </td>
              </tr>
          @endforeach

        </tbody>
      </table>
      <div>
        {{$proveedores->links('pagination::bootstrap-5')}}
      </div>
@endsection