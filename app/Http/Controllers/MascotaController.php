<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota; //AGREGAR NAMESPACE DEL MODELO A UTILIZAR
use App\Models\Cliente;
use App\Models\Servicio;

class MascotaController extends Controller
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
        return view('mascotas.createMascotas');
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
        $mascotas=new Mascota;
        $mascotas->nombre=$request->nombre;
        $mascotas->edad=$request->edad;
        $mascotas->tipo_animal=$request->tipo_animal;
        $mascotas->raza=$request->raza;
        $mascotas->cliente_id=$request->input('cliente_id');

        //$cliente= Cliente::find($id);
       // $mascotas->cliente_id=$clientes->id();
       //$mascotas->cliente()->attach($id);
        $mascotas->save();
         
         return redirect()->route('citas.create');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
