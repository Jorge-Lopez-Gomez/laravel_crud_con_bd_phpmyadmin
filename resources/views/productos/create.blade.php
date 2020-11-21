@extends('layout.layout')


<!-- Este es el titulo del script en donde estás -->
@section('titulo')
Producto create
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
<div class="card">
  <h5 class="card-header">Agregar un producto</h5>
  <div class="card-body">

<form action="{{ url('/productos') }}" method="post" enctype="multipart/form-data">
@csrf
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="" class="form-control">
    <br>
    <label for="Descripcion">{{'Descripcion'}}</label>
    <input type="text" name="Descripcion" id="Descripcion" value="" class="form-control">
    <br>
    <label for="categorias_id">{{'categorias_id'}}</label>
    <input type="text" name="categorias_id" id="categorias_id" value="" class="form-control">
    <br>
    <label for="Cantidad">{{'Cantidad'}}</label>
    <input type="text" name="Cantidad" id="Cantidad" value="" class="form-control">
    <br>
    <label for="Precio">{{'Precio'}}</label>
    <input type="text" name="Precio" id="Precio" value="" class="form-control">
    <br>
    <label for="Status">{{'Status'}}</label>
    <input type="text" name="Status" id="Status" value="" class="form-control">
    <br>
    <label for="Activo">{{'Activo'}}</label>
    <input type="text" name="Activo" id="Activo" value="" class="form-control">
    <br>
    <label for="Foto">{{'Foto'}}</label>
    <br>
    <input type="file" name="Foto" id="Foto" value="">
    <br>
    <br>
    <input type="submit" value="Agregar" class="btn btn-success">
    <a href="{{ url('productos') }} " class="btn btn-primary">Regresar</a>
</form>
@endsection