<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Proyectos;
use App\Model\ResumenObjetivos;
use Barryvdh\DomPDF\Facade;
use DB;

class pdfModulo4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function imprimir($id){
        
    
        $resumenO = DB::table('resumen_objetivos')
        ->select('resumen_objetivos.*')
        ->where('id_Planeacion',$id)->get();
      
        $planeacion=Proyectos::get();

    

        $pdf = \PDF::loadView('Modulo4.Exportar4', compact('resumenO','planeacion',$id));
        return $pdf->download('Exportarr.pdf');
   }
}
