<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('/clienteIndex', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/clienteCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'max:60', 'min:3'],
            'apellidos' => ['required', 'max:30', 'min:3'],
            'correo' => ['required', 'email'],
            'calle_ext' => ['required'],
            'cod_postal' => ['required'],
            'ciudad' => ['required'],
            'estado' => ['required'],
            'telefono' => ['required'],
        ]);

        Cliente::create($request->all());

        return redirect('/cliente/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('/clienteShow', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('/clienteEdit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => ['required', 'max:60', 'min:3'],
            'apellidos' => ['required', 'max:30', 'min:3'],
            'correo' => ['required', 'email'],
            'calle_ext' => ['required'],
            'cod_postal' => ['required'],
            'ciudad' => ['required'],
            'estado' => ['required'],
            'telefono' => ['required'],
        ]);

        Cliente::where('id', $cliente->id)->update($request->except('_token', '_method'));

        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect('/cliente');
    }
}