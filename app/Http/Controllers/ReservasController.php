<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
use App\Models\Reserva;
class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reserva = Reserva::paginate(10);
        return view('Reserva.ReIndex')->with('reservas',$reserva);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Reserva.ReCreate');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_entrada' => 'required|date',
            'fecha_salida' => 'required|date',
            'habitacion_id' => 'required|numeric',
            'huesped_id' => 'required|numeric|min:1|max:300',
            'numero_de_huespedes' => 'required|integer|min:1|max:4',
        ]);
        
        $reserva = new Reserva(); 
        $reserva->fecha_entrada=$request->input('fecha_entrada');
        $reserva->fecha_Salida=$request->input('fecha_salida');
        $reserva->habitacion_id=$request->input('habitacion_id');
        $reserva->huesped_id=$request->input('huesped_id');
        $reserva->numero_de_huespedes=$request->input('numero_de_huespedes');

        $reserva->save();

        return redirect()->route('reserva.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reserva = Reserva::findOrfail($id);
        return view('Reserva.ReShow', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reserva = Reserva::findOrfail($id);
        return view('Reserva.ReEdit')->with('reserva',$reserva);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fecha_entrada' => 'required|date',
            'fecha_salida' => 'required|date',
            'habitacion_id' => 'required|numeric|min:1|max:500',
            'huesped_id' => 'required|numeric|min:1|max:300',
            'numero_de_huespedes' => 'required|integer|min:1|max:4',
        ]);
        
        $reserva = new Reserva(); 
        $reserva->fecha_entrada=$request->input('fecha_entrada');
        $reserva->fecha_Salida=$request->input('fecha_salida');
        $reserva->habitacion_id=$request->input('habitacion_id');
        $reserva->huesped_id=$request->input('huesped_id');
        $reserva->numero_de_huespedes=$request->input('numero_de_huespedes');

        $reserva->save();

        return redirect()->route('reserva.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reserva::destroy($id);

        return redirect()->route('reserva.index');
    }
}
