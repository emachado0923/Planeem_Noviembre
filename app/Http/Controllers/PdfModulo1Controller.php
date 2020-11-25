<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Proyectos;
use App\Model\pensamiento_pensamiento;
use App\Model\Corporativos;
use Barryvdh\DomPDF\Facade;

class PdfModulo1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function imprimir($id){
        
    
        $valor = DB::table('valores_corporativos')
        ->select('valores_corporativos.*')
        ->where('id_Planeacion',$id)
        ->where('valores','<>','NULL')->get();
      
        $planeacion = DB::table('planeacion')
        ->select('planeacion.*')
        ->where('planeacion.id_Planeacion',$id)
        ->get();
        $pensamiento=DB::table('pensamiento_pensamiento')
        ->select('pensamiento_pensamiento.*')
        ->where('pensamiento_pensamiento.id_Planeacion',$id)
        ->get();
        $valores=Corporativos::get();

    

        $pdf = \PDF::loadView('Modulo1.Exportar', compact('planeacion','pensamiento','valores','valor',$id));
        return $pdf->download('InformePlaneEm.pdf');
   }
}
