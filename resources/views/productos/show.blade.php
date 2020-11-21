@extends('layout.layout')


<!-- Este es el titulo del script en donde estás -->
@section('titulo')
Producto show
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
        </tr>
    </thead>
    <tbody>
        <tr>
            <td >{{$producto->id}}</td>
            <td><img src="{{ asset('storage').'/'.$producto->Foto}}" alt="" width="200"></td>
            <td >{{$producto->Nombre}}</td>
            <td >{{producto->categorias_id}}</td>
            <td >{{$producto->Descripcion}}</td>
            <td>{{$producto->Cantidad}}</td>
            <td>{{$producto->Precio}}</td>
            <td>{{$producto->Status}}</td>
            <td>{{$producto->Activo}}</td>

        </tr>
    </tbody>
</table>
<a href="{{ url('/productos') }}" class="btn btn-primary">Regresar</a>
@endsection