@extends('Layouts.layout')  

@section('titulo','show')

@section('contenido') 

<h1><center>Mostrar Habitaciones Individuales (SHOW)</center></h1>

<h6><b>ID</b></h6>
<p>{{$habitacion->id}}</p>

<h6><b>Nombre</b></h6>
<p>{{$habitacion->numero}}</p>

<h6><b>Apellido</b></h6>
<p>{{$habitacion->tipo}}</p>

<h6><b>Correo</b></h6>
<p>{{$habitacion->precio}}</p>


@endsection()
