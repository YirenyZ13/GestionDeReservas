@extends('Layouts.layout')  

@section('titulo','show')

@section('contenido') 

<h1><center>Mostrar Huespedes Individuales (SHOW)</center></h1>

<h6><b>ID</b></h6>
<p>{{$huesped->id}}</p>

<h6><b>Nombre</b></h6>
<p>{{$huesped->nombre}}</p>

<h6><b>Apellido</b></h6>
<p>{{$huesped->apellido}}</p>

<h6><b>Correo</b></h6>
<p>{{$huesped->correo_electronico}}</p>

<h6><b>Telefono</b></h6>
<p>{{$huesped->telefono}}</p>

@endsection()