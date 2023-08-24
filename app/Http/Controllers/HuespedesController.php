<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
use App\Models\Huesped;

class HuespedesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $huesped = Huesped::paginate(10);
        return view('Huesped.HuIndex')->with('huespeds',$huesped);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Huesped.HuCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|regex:/[A-Z][a-z]+/i',
            'apellido'=>'required',
            'correo_electronico'=>'required|unique:huespeds|Email',
            'telefono'=>'required|regex:/[0-9]/'
        ]); 
        
        
        $huesped = new Huesped(); 
        $huesped->nombre=$request->input('nombre');
        $huesped->apellido=$request->input('apellido');
        $huesped->correo_electronico=$request->input('correo_electronico');
        $huesped->telefono=$request->input('telefono');

        $huesped->save();

        return redirect()->route('huesped.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $huesped = Huesped::findOrfail($id);
        return view('Huesped.HuShow', compact('huesped'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $huesped = Huesped::findOrfail($id);
        return view('Huesped.HuEdit')->with('huesped',$huesped);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $huesped = Huesped::findOrfail($id); // ESTA LINEA SOLO MUESTRA LOS DATOS DE CONTACTO Y DEFINE LA VARIABLE

        $request->validate([
            'nombre'=>'required|regex:/[A-Z][a-z]+/i', 
            'apellido'=>'required',
            'correo_electronico'=>['required',
            'Email',Rule::unique('huespeds')->ignore($huesped->id)],
            'telefono'=>'required|regex:/[0-9]/',
        
    
        ]); 
        
        
        $huesped->nombre=$request->input('nombre');
        $huesped->apellido=$request->input('apellido');
        $huesped->correo_electronico=$request->input('correo_electronico');
        $huesped->telefono=$request->input('telefono');

        $huesped->save(); 

        return redirect()->route('huesped.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Huesped::destroy($id);

        return redirect()->route('huesped.index');
    }
}
