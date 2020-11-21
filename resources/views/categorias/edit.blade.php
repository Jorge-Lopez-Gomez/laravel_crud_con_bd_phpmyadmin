Editar usuariuo
@extends('layout.layout')


<!-- Este es el titulo del script en donde estás -->
@section('titulo')
Categoria edit
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





<!-- Este es el contenido del script en donde estás -->
@section('content')

<div class="card">
  <h5 class="card-header">Informacion de la categoria</h5>
  <div class="card-body">

<form action="{{ url('/categorias/'.$categoria->id) }}" method="post" enctype="multipart/form-data">

@csrf
@method('PATCH')
<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="{{$categoria->Nombre}}" class="form-control">
<br/>
<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" id="Descripcion" value="{{$categoria->Descripcion}}" class="form-control">
<br/>
<label for="Cantidad">{{'Cantidad'}}</label>
<input type="text" name="Cantidad" id="Cantidad" value="{{$categoria->Cantidad}}" class="form-control">
<br/>
<label for="Imagen">{{'Imagen'}}</label>
<br/>

<img src="{{ asset('storage').'/'.$categoria->Imagen}}" alt="" width="150">

<br/>
<input type="file" name="Imagen" id="Imagen"  value="{{$categoria->Imagen}}">
<br/>
<br/>
<input type="submit" class="btn btn-primary" value="Modificar">
<a href="{{url('categorias')}}" class="btn btn-info">Regresar</a>

</form>

@endsection