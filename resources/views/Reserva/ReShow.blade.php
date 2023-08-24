@extends('Layouts.layout')  

@section('titulo','show')

@section('contenido') 

<h1><center>Mostrar Reservas Individuales (SHOW)</center></h1>

<h6><b>ID</b></h6>
<p>{{$reserva->id}}</p>

<h6><b>Fecha_entrada</b></h6>
<p>{{$reserva->fecha_entrada}}</p>

<h6><b>Fecha_salida</b></h6>
<p>{{$reserva->fecha_salida}}</p>

<h6><b>Habitacion_id</b></h6>
<p>{{$reserva->habitacion_id}}</p>

<h6><b>huesped_id</b></h6>
<p>{{$reserva->huesped_id}}</p>

<h6><b>numero_de_huespedes</b></h6>
<p>{{$reserva->numero_de_huespedes}}</p>
@endsection()