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
          $factura=DB::select("select * from factura join cliente on factura.cli_id=cliente.cli_id");
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
      public function detalle(Request $req)
      {
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
       return redirect(route('factura.edit',$fac_id));
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
        $factura=Factura::create($data);
        return redirect(route('factura.edit',$factura->fac_id));
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
        $factura=Factura::find($id);
        $cliente=DB::select("SELECT * from cliente");
        $producto=DB::select("SELECT * from producto");
        $detalle=DB::select("SELECT * FROM factura_detalle fd 
                             JOIN producto p ON fd.pro_id=p.pro_id  
                             WHERE fd.fac_id=$id");
        return view('factura.edit')
        ->with('factura',$factura)
        ->with('cliente',$cliente)
        ->with('producto',$producto)
        ->with('detalle',$detalle)
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


    public function factura_pdf($fac_id){
        
        $factura=DB::select("
            SELECT * FROM factura f
            JOIN cliente c ON c.cli_id=f.cli_id
            WHERE f.fac_id=$fac_id ");

        $detalle=DB::select("SELECT * FROM factura_detalle d 
                   JOIN producto p ON p.pro_id=d.pro_id
                   WHERE d.fac_id=$fac_id 
            ");

        $pdf = PDF::loadView('factura.pdf',[ 'factura'=>$factura[0],'detalle'=>$detalle ]);
        return $pdf->stream('factura.pdf');




    }

}

