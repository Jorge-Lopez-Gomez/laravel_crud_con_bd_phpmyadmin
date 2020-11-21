@extends('layout.layout')


<!-- Este es el titulo del script en donde estás -->
@section('titulo')
Producto edit
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
<form action="{{ url('/productos/'.$producto->id) }}" method="post" enctype="multipart/form-data">  
    @csrf
    @method('PATCH')
    
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="nombre" value="{{ $producto->Nombre }}" class=" form-control">
    <br>
    <label for="Descripcion">{{'Descripcion'}}</label>
    <input type="text" name="Descripcion" id="Descripcion" value="{{ $producto->Descripcion }}" class=" form-control">
    <br>
    <label for="categorias_id">{{'categorias_id'}}</label>
    <input type="text" name="categorias_id" id="categorias_id" value="{{ $producto->categorias_id }}" class="form-control">
    <br>
    <label for="Cantidad">{{'Cantidad'}}</label>
    <input type="text" name="Cantidad" id="Cantidad" value="{{ $producto->Cantidad}}" class="form-control">
    <br>
    <label for="Precio">{{'Precio'}}</label>
    <input type="text" name="Precio" id="Precio" value="{{ $producto->Precio}}" class="form-control">
    <br>
    <label for="Status">{{'Status'}}</label>
    <input type="text" name="Status" id="Status" value="{{ $producto->Status}}" class="form-control">
    <br>
    <label for="Activo">{{'Activo'}}</label>
    <input type="text" name="Activo" id="Activo" value="{{ $producto->Activo}}" class="form-control">
    <br>
    <label for="Foto">{{'Foto'}}</label>
    <br>
    <input type="file" name="Foto" id="Foto" value="{{ $producto->Foto}}">
    <br>
    <br>
    <input type="submit" value="Modificar" class="btn btn-success">
    <a href="{{ url('productos') }}" class="btn btn-primary">Regresar</a>
</form>
@endsection