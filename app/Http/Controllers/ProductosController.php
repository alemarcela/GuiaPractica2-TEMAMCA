<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataproduct=Productos::all();
        return view('productos.index', compact('dataproduct'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $producto=new Productos();
        return view('productos.create', compact('producto'));
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
       //dd($request);
        $dataProducts = $request->except('_token','saveitem');
        Productos::insert($dataProducts);
        //return response()->json($dataProducts);
        return redirect('productos/');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::find($id);
        return view('productos.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $producto = Productos::find($request->id);
        $producto->update([
            'nombreprod'=> $request->nombreprod,
            'descriprod'=> $request->descriprod,
            'typprod'=> $request->typprod,
            'costunit'=> $request->costunit,
            'cantprod'=> $request->cantprod
        ]);

        return redirect()->route('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataprod = Productos::find($id);
        $dataprod->delete();
        return redirect('productos/');
    }
}
