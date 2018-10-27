<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Vehiculo;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listar()
    {
        $clientes = Cliente::all()->sortBy('Nombre', 0);
        return view('clientes.listar', compact('clientes'));
    }

    public function index()
    {
        return view('clientes.index');
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
        $cliente = new Cliente();
        $cliente->Nombre = $request->input('nombre');
        $cliente->Apellido = $request->input('apellido');
        $cliente->Direccion = $request->input('direccion');
        $cliente->Telefono = $request->input('telefono');
        $cliente->Celular = $request->input('celular');
        $cliente->save();
        return redirect()->route('clientes.listar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        $vehiculos = Vehiculo::where('id_cliente','=',$id)->get();
        return view('clientes.show', compact('vehiculos'), compact('cliente'));
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
    public function destroy(Cliente $cliente)
    {
 
        $cliente->delete();
        return redirect()->route('clientes.listar');
    }
}
