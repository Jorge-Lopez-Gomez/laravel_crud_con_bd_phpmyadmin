@extends('layout.layout')


<!-- Este es el titulo del script en donde estás -->
@section('titulo')

@endsection
<!-- Este es el fin del titulo del script en donde estàs -->





<!-- Este es el menu del script en donde estás -->
@section('menu')
            <li class=""><a href="supervisor">Dashboard <span class="sr-only">(current)</span></a></li>
            <li class=""><a href="categoria">Categoria</a></li>
            <li class="active"><a href="usuarios">Usuarios</a></li>
            <li><a href="productos">Productos</a></li>
            <li><a href="#">Salir</a></li>
@endsection
<!-- Este es el fin del menu del script en donde estàs -->





<!-- Este es el contenido del script en donde estás -->
@section('content')

<div class="card">
  <h5 class="card-header">Llenar el formulario</h5>
  <div class="card-body">

<form action="{{ url('/usuarios')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="" class="form-control">
    <br/>
    <label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="" class="form-control">
    <br/>
    <label for="ApellidoMaterno">{{'Apellido Materno'}}</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="" class="form-control">
    <br/>
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo" id="Correo" value="" class="form-control">
    <br/>
    <label for="password">{{'Password'}}</label>
    <input type="text" name="password" id="password" value="" class="form-control">
    <br/>
    <label for="Foto">{{'Foto'}}</label>
    <input type="file" name="Foto" id="Foto" value="" >
    <br>
    <br>    
    <input type="submit" class="btn btn-primary" value="Agregar">
    <a href="{{url('usuarios')}}" class="btn btn-info">Regresar</a>
    
</form>
@endsection