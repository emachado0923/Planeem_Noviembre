<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Proyectos;
use App\Model\pensamiento_pensamiento;
use App\Model\Corporativos;
use Barryvdh\DomPDF\Facade;

class pdfModulo2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function imprimir($id){
        
    
        $planeacion=DB::table('planeacion')
        ->select('planeacion.*')
        ->where('planeacion.id_Planeacion',$id)
        ->get();
        $capacidadDirectiva=DB::table('respuesta_capacidad')
        ->join('capacidads', 'respuesta_capacidad.idCapacidad', '=', 'capacidads.id')
        ->join('planeacion', 'respuesta_capacidad.idPlaneacion', '=', 'planeacion.id_Planeacion')
        ->select('respuesta_capacidad.*','capacidads.*')
        ->where('respuesta_capacidad.idPlaneacion',$id)
        ->where('capacidads.idTipo',1)
        ->get();
        $capacidadCompetitiva=DB::table('respuesta_capacidad')
        ->join('capacidads', 'respuesta_capacidad.idCapacidad', '=', 'capacidads.id')
        ->join('planeacion', 'respuesta_capacidad.idPlaneacion', '=', 'planeacion.id_Planeacion')
        ->select('respuesta_capacidad.*','capacidads.*')
        ->where('respuesta_capacidad.idPlaneacion',$id)
        ->where('capacidads.idTipo',2)
        ->get();
        $capacidadFinanciera=DB::table('respuesta_capacidad')
        ->join('capacidads', 'respuesta_capacidad.idCapacidad', '=', 'capacidads.id')
        ->join('planeacion', 'respuesta_capacidad.idPlaneacion', '=', 'planeacion.id_Planeacion')
        ->select('respuesta_capacidad.*','capacidads.*')
        ->where('respuesta_capacidad.idPlaneacion',$id)
        ->where('capacidads.idTipo',3)
        ->get();
        $capacidadTecnologica=DB::table('respuesta_capacidad')
        ->join('capacidads', 'respuesta_capacidad.idCapacidad', '=', 'capacidads.id')
        ->join('planeacion', 'respuesta_capacidad.idPlaneacion', '=', 'planeacion.id_Planeacion')
        ->select('respuesta_capacidad.*','capacidads.*')
        ->where('respuesta_capacidad.idPlaneacion',$id)
        ->where('capacidads.idTipo',4)
        ->get();
        $capacidadTalentoHumano=DB::table('respuesta_capacidad')
        ->join('capacidads', 'respuesta_capacidad.idCapacidad', '=', 'capacidads.id')
        ->join('planeacion', 'respuesta_capacidad.idPlaneacion', '=', 'planeacion.id_Planeacion')
        ->select('respuesta_capacidad.*','capacidads.*')
        ->where('respuesta_capacidad.idPlaneacion',$id)
        ->where('capacidads.idTipo',5)
        ->get();

        $perfil_compe = DB::table('perfil_compe')
        ->join('planeacion', 'perfil_compe.idPlaneacion', '=', 'planeacion.id_Planeacion')
        ->join('factorclaves', 'perfil_compe.idFactorClave', '=', 'factorclaves.id')
        ->select('perfil_compe.*','factorclaves.*')
        ->where('perfil_compe.idPlaneacion',$id)
        ->get();

        $perfil_compe_empresa = DB::table('perfil_compe_empresas')
        ->join('planeacion', 'perfil_compe_empresas.idPlaneacion', '=', 'planeacion.id_Planeacion')
        ->join('perfil_compe', 'perfil_compe_empresas.id_perfil_compe', '=', 'perfil_compe.id')
        ->select('perfil_compe_empresas.*')
        ->where('perfil_compe_empresas.idPlaneacion',$id)
        ->get();

        $pdf = \PDF::loadView('Modulo2.Exportar.Exportar2', compact('planeacion','capacidadDirectiva'
        ,'capacidadCompetitiva','capacidadFinanciera','capacidadTecnologica','capacidadTalentoHumano'
        ,'perfil_compe','perfil_compe_empresa'
        ));
        return $pdf->download('Exportar_mod_2.pdf');
   }
}
