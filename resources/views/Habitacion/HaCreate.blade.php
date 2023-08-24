@extends('Layouts.layout')  
@section('titulo','create')
@section('contenido') 
<h1>Creacion de Habitacion (CREATE)</h1>
@if ($errors->any())                                            
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('habitacions.crear')}}">
@csrf 
<div>
Numero
<input type="number" name="numero" id="numero" placeholder="Ingrese el Numero" value="{{old('numero')}}">
</div>
<br>
<div>
Tipo
<input type="text" name="tipo" id="tipo" placeholder="Ingrese el tipo" value="{{old('tipo')}}">
</div>
<br>
<div>
Precio
<input type="number" name="precio" id="precio" placeholder="Ingrese el precio" value="{{old('precio')}}">
</div>
<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()