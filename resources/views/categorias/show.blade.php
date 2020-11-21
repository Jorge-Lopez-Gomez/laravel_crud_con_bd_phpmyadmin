@extends('layout.layout')

@section('titulo')
Categoria show
@endsection

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



@section('content')
<div class="card">
  <h5 class="card-header">Datos personales</h5>
  <div class="card-body">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Id categoria</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$categoria->id}}</td>
            <td><img src="{{ asset('storage').'/'.$categoria->Imagen}}" alt="" width="150"></td>
            <td>{{$categoria->Nombre}}</td>
            <td>{{$categoria->Descripcion}}</td>
            <td>{{$categoria->Cantidad}}</td>¿
        </tr>
    </tbody>
</table>
<a href="{{ url('/categorias') }}" class="btn btn-primary">Regresar</a>
@endsection
