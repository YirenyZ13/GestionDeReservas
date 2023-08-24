@extends('Layouts.layout')  
@section('titulo','create')
@section('contenido') 
<h1>Creacion de Huesped (CREATE)</h1>
@if ($errors->any())                                            
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('huespeds.crear')}}">
@csrf 
<div>
Nombre
<input type="text" name="nombre" id="nombre" placeholder="Ingrese el Nombre" value="{{old('nombre')}}">
</div>
<br>
<div>
Apellido
<input type="text" name="apellido" id="apellido" placeholder="Ingrese el apellido" value="{{old('apellido')}}">
</div>
<br>
<div>
Correo
<input type="text" name="correo_electronico" id="correo_electronico" placeholder="Ingrese el Correo" value="{{old('correo_electronico')}}">
</div>
<br>
<div>
telefono
<input type="number" name="telefono" id="telefono" placeholder="Ingrese el telefono" value="{{old('telefono')}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()