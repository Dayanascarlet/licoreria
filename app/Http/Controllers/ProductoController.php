<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Proveedor;
use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $producto=DB::Select("SELECT * FROM producto JOIN proveedor ON producto.prov_id=proveedor.prov_id"); 
         return view('producto.index')

         ->with ('producto', $producto)
         ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto=Producto::all();
        $proveedor=Proveedor::all();
         return view('producto.create')
         ->with('producto',$producto)
         ->with('proveedor',$proveedor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        //dd($data);
        Producto::create($data);
        return redirect(route('producto'));
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
        // // dd("hola");
         $producto=Producto::find($id);
         $proveedor=Proveedor::all();
         return view('producto.edit')
         ->with('producto',$producto)
         ->with('proveedor',$proveedor)
         ;
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
        $producto=Producto::find($id);
        $producto->update($request->all());      
        //dd($id);
        return redirect(route('producto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Producto::destroy($id);
        return redirect(route('producto'));
    }
}
