@extends('Layouts.layout')  
@section('titulo','index')
@section('contenido') 
<h1><center>Tabla de Gestion De Huespedes (index)</center></h1>
<button><center><a class="btn btn" href= "{{route('huespeds.crear')}}"><u>Crear</u></a></center></button>
<table class="table table-danger table-bordered border-primary" class="pagination">
    <thead>
        <th>id</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>correo_electronico</th> 
        <th>numero de telefono</th>   
    </thead>
    <tbody>
        @forelse($huespeds as $huesped) 
        <tr>
        <td><a href="{{route('huesped.show', ['id'=>$huesped->id])}}">{{$huesped->id}} </a></td> 
        <td>{{$huesped->nombre}}</td> 
        <td>{{$huesped->apellido}}</td>
        <td>{{$huesped->correo_electronico}}</td>
        <td>{{$huesped->telefono}}</td>
        
</tr>
        @empty 
        <tr>
            <td>No hay huespedes</td>
        </tr>
        @endforelse 

    </tbody>
</table>
{{ $huespeds->render('pagination::bootstrap-5') }} 
@endsection()