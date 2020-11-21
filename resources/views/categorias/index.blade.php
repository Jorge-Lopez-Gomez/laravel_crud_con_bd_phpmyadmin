principal
@extends('layout.layout')


<!-- Este es el titulo del script en donde estás -->
@section('titulo')
Categorias - INDEX
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

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<a href="{{url('categorias/create')}}" class="btn btn-info btn-lg btn-block">Agregar Categoria</a>
<!-- <a href="{​​{​​ url('usuarios/create') }​​}​​">Crear nuevo usuario</a> -->

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Categoria id</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->id}}</td>
            <td><img src="{{ asset('storage').'/'.$categoria->Imagen}}" alt="" width="150"></td>
            <td>{{$categoria->Nombre}}</td>
            <td>{{$categoria->Descripcion}}</td>
            <td>{{$categoria->Cantidad}}</td>
            <td>
                <form action="{{url('/categorias/'.$categoria->id)}}" method="post">
                <a href="{{url('/categorias/'.$categoria->id.'/edit')}}" class="btn btn-success">Editar</a>
                <a href="{{ url('/categorias/'.$categoria->id.'') }}" class="btn btn-warning">Mostrar</a>
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