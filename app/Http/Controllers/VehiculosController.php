<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
use App\Cliente;//para mostrar los clientes y sus id cuando se crea un nuevo auto
use App\Reparacion;//para el "show"
Use Redirect;
class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function nuevo()
    {
        $clientes = Cliente::all();
        return view('vehiculos.nuevo', compact('clientes'));
    }

    public function index()
    {
        //$vehiculos = Vehiculo::all();

       // return view('vehiculos.index', compact('vehiculos'));
        return view('vehiculos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $vehiculo = new Vehiculo();
        $vehiculo->Modelo = $request->input('modelo');
        $vehiculo->Patente = $request->input('patente');
        $vehiculo->id_cliente = $request->input('cliente');
        $vehiculo->save();
        $a = $request->input('cliente');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        $reparaciones = Reparacion::where('id_vehiculo','=',$id)->get();
        return view('vehiculos.show', compact('reparaciones'), compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('clientes.listar');
    }
}
