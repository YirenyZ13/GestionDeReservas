@extends('Layouts.layout')  
@section('titulo','index')
@section('contenido') 
<h1><center>Tabla de Gestion De Reservas (index)</center></h1>
<button><center><a class="Btn btn-secondary es gris" href= "{{route('habitacions.crear')}}"><u>Crear</u></a></center></button>
<table class="table table-danger table-bordered border-primary table-primary" class="pagination">
    <thead>
        <th>id</th>
        <th>numero</th>
        <th>tipo</th>
        <th>precio</th>    
    </thead>
    <tbody>
        @forelse($habitacions as $habitacion) 
        <tr>
        <td><a href="{{route('habitacion.show', ['id'=>$habitacion->id])}}">{{$habitacion->id}} </a></td> 
        <td>{{$habitacion->numero}}</td> 
        <td>{{$habitacion->tipo}}</td>
        <td>{{$habitacion->precio}}</td>
        
</tr>
        @empty 
        <tr>
            <td>No hay habitaciones</td>
        </tr>
        @endforelse 

    </tbody>
</table>
{{ $habitacions->render('pagination::bootstrap-5') }} 
@endsection()