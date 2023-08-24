@extends('Layouts.layout')  
@section('titulo','create')
@section('contenido') 
<h1>Creacion de Reservas (CREATE)</h1>
@if ($errors->any())                                            
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('reservas.crear')}}">
@csrf 
<div>
Fecha De Entrada
<input type="text" name="fecha entrada" id="fecha_entrada" placeholder="Ingrese la fecha entrada" value="{{old('fecha_entrada')}}">
</div>
<br>
<div>
Fecha De Salida
<input type="text" name="fecha salida" id="fecha_salida" placeholder="Ingrese la fecha salida" value="{{old('fecha_salida')}}">
</div>
<br>
<div>
Habitacion Id
<input type="number" name="Habitacion Id" id="habitacion_id" placeholder="Ingrese la habitacion id" value="{{old('habitacion_id')}}">
</div>
<br>
<div>
Huesped Id
<input type="number" name="Huesped id" id="huesped_id" placeholder="Ingrese el huesped id" value="{{old('huesped_id')}}">
</div>

<div>
Numero de Huespedes
<input type="number" name="Numero de Huespedes" id="numero_de_huesped" placeholder="Ingrese el numero de huespedes" value="{{old('numero_de_huespedes')}}">
</div>
<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()