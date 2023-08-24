<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
use App\Models\Habitacion;


class HabitacionesController extends Controller
{  
    public function index()
    {
        $habitacion = Habitacion::paginate(10);
        return view('Habitacion.HaIndex')->with('habitacions',$habitacion);
    }

    public function create()
    {
        return view('Habitacion.HaCreate');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|numeric', 
            'tipo' => 'required', 
            'precio' => 'required|numeric', 
        ]);
        

        $habitacion = new Habitacion(); 
        $habitacion->numero=$request->input('numero');
        $habitacion->tipo=$request->input('tipo');
        $habitacion->precio=$request->input('precio');  
        
        if ($habitacion->save()){
            $mensaje = "La habitacion se creo exitosamente"; 
        }
        
        else{
            $mensaje = "La habitacion no se creo exitosamente"; 
        }
        return redirect()->route('habitacion.index')->with('mensaje',$mensaje);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $habitacion = Habitacion::findOrfail($id);
        return view('Habitacion.HaShow', compact('habitacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $habitacion = Habitacion::findOrfail($id);
        return view('Habitacion.HaEdit')->with('habitacion',$habitacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $habitacion = Habitacion::findOrfail($id); 

        $request->validate([
            "numero"=>'required|numeric', 
            "tipo"=>'required|string',
            "precio"=>'required|numeric',
            
        ]); 
        $habitacion->numero = $request->input("numero");
        $habitacion->tipo = $request->input("tipo");
        $habitacion->precio = $request->input("precio");

        if ($habitacion->save()){
            $mensaje = "La habitacion se edito exitosamente"; 
        }
        
        else{
            $mensaje = "La habitacionno se edito exitosamente"; 
        }

        return redirect()->route('habitacion.index')->with('mensaje',$mensaje);

    
    }
    public function destroy(string $id)
    {
    
        Habitacion::destroy($id);

    return redirect()->route('habitacion.index');
}
}