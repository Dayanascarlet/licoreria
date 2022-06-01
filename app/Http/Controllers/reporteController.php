<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reporte;
use App\factura;
use App\producto;
use App\cliente;
use App\proveedor;
use DB;
use PDF;

class reporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $data=$request->all();
       
        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');
        if(isset($data['desde'])){
        $desde=$data['desde'];
        $hasta=$data['hasta'];
    }
       
        
         //boton del pdf
        if(isset($data['btn_pdf'])){ 
       $data=['reporte'=>$reporte];
       $pdf = PDF::loadView('reporte',$data);
        return $pdf->stream('reporte.pdf');
           }

        
        return view('reporte.index')
        ->with('desde',$desde)
        ->with('hasta',$hasta)
        ;
    }
    public function search (request $request){
      $data=$request->all();
    
      $desde=date('Y-m-d');
        $hasta=date('Y-m-d');
        if(isset($data['desde'])){
        $desde=$data['desde'];
        $hasta=$data['hasta'];
    }
       
       $producto=producto::all();
       $cliente=cliente::all();
       $proveedor=proveedor::all();
       $cli_id="";
        $pro_id="";
       $sql_cli="";
       $sql_pro="";
        $data=$request->all();
        
        $reporte=DB::select("SELECT f.fac_no,
f.cli_id,
f.fac_fecha,
f.fac_id,
SUM(fd.fad_vt) AS total,
c.*
FROM reporte f
JOIN cliente c ON f.cli_id=c.cli_id
JOIN factura_detalle fd ON  f.fac_id=fd.fac_id
WHERE f.fac_fecha BETWEEN '$desde' AND '$hasta'
GROUP BY f.fac_no, f.cli_id, f.fac_fecha, f.fac_id") ;
 
 return view('reporte.index')
        ->with('reporte',$reporte)
       ->with('desde',$desde)
        ->with('hasta',$hasta)
        ;
     
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
