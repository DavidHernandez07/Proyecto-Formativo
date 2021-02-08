<?php

namespace App\Http\Controllers;

use App\panaderia;
use Illuminate\Http\Request;

class PanaderiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $panaderia = panaderia::all();
        return view('panaderia.index',["panaderia"=>$panaderia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('panaderia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $panaderia= new panaderia();
        $panaderia->id=$request->id;
        $panaderia->nit=$request->nit;
        $panaderia->nombre=$request->nombre;
        $panaderia->telefono=$request->telefono;
        $panaderia->direccion=$request->direccion;
        $panaderia->save();
        return redirect()->route('panaderia.index');
    }

   
    public function show()
    {
        //
    }

    public function edit($id)
    {
        //
        $panaderia = panaderia::find($id);
        return view('panaderia.edit',['panaderia'=>$panaderia]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\panaderia  $panaderia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    $panaderia = panaderia::find($id);
    $panaderia->id=$request->id;
    $panaderia->nit=$request->nit;
    $panaderia->nombre=$request->nombre;
    $panaderia->telefono=$request->telefono;
    $panaderia->direccion=$request->direccion;
    $panaderia->save();
        return redirect()->route('panaderia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\panaderia  $panaderia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $panaderia = panaderia::find($id);
        $panaderia->delete();
        return redirect()->route('panaderia.index');
    }
}

