<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; //AGREGAR NAMESPACE DEL MODELO A UTILIZAR

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.createClientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //Retorna al fomrulario para no enviar formulario vacio
        $request->validate([
       'nombre'=>'required',
       'apellido'=>'required',
        'telefono'=>'required',
        'email'=>'required',
       ]);
        //
        $clientes = new Cliente();
        $clientes->nombre=$request->input('nombre');
        $clientes->apellido=$request->input('apellido');
        $clientes->telefono=$request->input('telefono');
        $clientes->email=$request->input('email');

        $clientes->save();
        return redirect()->route('clientes.show',$clientes->id);//quitar tal vez
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $clientes= Cliente::find($id);

        return view('clientes.showClientes',compact('clientes'));
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
    public function destroy($id)
    {
        //
    }
}
