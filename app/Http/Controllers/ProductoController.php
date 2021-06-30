<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; //AGREGAR NAMESPACE DEL MODELO A UTILIZAR

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $productos= Producto::all();
        return view('productos.indexProductos',compact('productos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.createProductos');
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
           'nombre'=>'required',
           'marca'=>'required',
           'descripcion'=>'required',
           'categoria'=>'required',
           'precio'=>'required',
           ]);

         $productos= new Producto();
         $productos->nombre=$request->input('nombre');
         $productos->marca=$request->input('marca');
         $productos->descripcion=$request->input('descripcion');
         $productos->categoria=$request->input('categoria');
         $productos->precio=$request->input('precio');

         $productos->save();

         return redirect()->route('productos.show',$productos->id);
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
        $productos=Producto::find($id);

        return view('productos.showProductos',compact('productos'));

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
