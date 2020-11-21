@extends('layout.layout')


<!-- Este es el titulo del script en donde estás -->
@section('titulo')
Producto index
@endsection
<!-- Este es el fin del titulo del script en donde estàs -->





<!-- Este es el menu del script en donde estás -->
@section('menu')
<li class="nav-item">
            <a class="nav-link active" href="tablero">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="categorias">
              <span data-feather="home"></span>
              Categoria <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuarios">
              <span data-feather="file"></span>
              Usuario
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productos">
              <span data-feather="shopping-cart"></span>
              Productos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Cerrar Sesión
            </a>
          </li>
@endsection
<!-- Este es el fin del menu del script en donde estàs -->



@section('content')
<a href="{{url('productos/create')}}" class="btn btn-info btn-lg btn-block">Agregar Producto</a>
<!-- <a href="{​​{​​ url('usuarios/create') }​​}​​">Crear nuevo usuario</a> -->
<table class="table">
    <thead class="thead-dark">
        <tr>

            <th>Id</th>
            <th>Foto</th>
            <th>Nombre del producto</th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Existencia</th>
            <th>Precio</th>
            <th>Status</th>
            <th>Activo</th>
            <th></th>
            <th>Acciones</th>
        </tr> 
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td><img src="{{ asset('storage').'/'.$producto->Foto}}" alt="" width="200"></td>
                <td>{{$producto->Nombre}}</td>
                <td>{{$producto->categorias_id}}</td>
                <td>{{$producto->Descripcion}}</td>
                <td>{{$producto->Cantidad}}</td>
                <td>{{$producto->Precio}}</td>
                <td>{{$producto->Status}}</td>
                <td>{{$producto->Activo}}</td>
                
                <td>
                <form action="{{url('/productos/'.$producto->id)}}" method="post">
                <a href="{{url('/productos/'.$producto->id.'/edit')}}" class="btn btn-success">Editar</a>
                <a href="{{ url('/productos/'.$producto->id.'') }}" class="btn btn-warning">Mostrar</a>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Borrar');" class="btn btn-danger">Borrar</button>
                </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
@endsection