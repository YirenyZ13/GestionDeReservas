@extends('Layouts.layout')  
@section('titulo','index')
@section('contenido') 
<h1><center>Tabla de Gestion De Reservas (index)</center></h1>
<button><center><a class="btn btn" href= "{{route('reservas.crear')}}"><u>Crear</u></a></center></button>
<table class="table table-danger table-bordered border-primary" class="pagination">
    <thead>
        <th>id</th>
        <th>fecha_entrada</th>
        <th>fecha_salida</th>
        <th>habitacion_id</th> 
        <th>huesped_id</th>   
        <th>numero_de_huespedes</th>  
    </thead>
    <tbody>
        @forelse($reservas as $reserva) 
        <tr>
        <td><a href="{{route('reserva.show', ['id'=>$reserva->id])}}">{{$reserva->id}} </a></td> 
        <td>{{$reserva->fecha_entrada}}</td> 
        <td>{{$reserva->fecha_Salida}}</td>
        <td>{{$reserva->habitacion_id}}</td>
        <td>{{$reserva->huesped_id}}</td>
        <td>{{$reserva->numero_de_huespedes}}</td>
</tr>
        @empty 
        <tr>
            <td>No hay reservas</td>
        </tr>
        @endforelse 

    </tbody>
</table>
{{ $reservas->render('pagination::bootstrap-5') }} 
@endsection()