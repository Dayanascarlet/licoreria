<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\Detalle;
use DB;
use PDF;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $factura=Factura::all();
        return view('factura.index')
        ->with('factura',$factura);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cliente=DB::select("SELECT * from cliente");
        $producto=DB::select("SELECT * from producto");
        return view('factura.create')
        ->with('cliente',$cliente)
        ->with('producto',$producto)
        ;
    }
      public function detalle(Request $req){
         $datos=$req->all();
         $fac_id=$datos['fac_id'];
         
         if(isset($datos['btn_detalle'])=='btn_detalle'){
                ///GUARDO EL DETALLE 
           Detalle::create($datos);
         }
         if(isset($datos['btn_eliminar'])>0){
                ///ELIMINO EL DETALLE    
                $fad_id=$datos['btn_eliminar'];
                Detalle::destroy($fad_id);    

         }
       return redirect(route('facturas.edit',$fac_id));
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
