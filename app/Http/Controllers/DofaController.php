<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\tipo_Matriz_crecimiento;

class DofaController extends Controller
{
   public function dofa(Request $request){
       $id = $request->input('id_planecion');

       $typeA = ['aAlta', 'aMedia', 'aBaja'];
       $typeO = ['oAlta', 'oMedia', 'oBaja'];

       $amenaza= DB::table('respuesta_analisis')
       ->select('nombre')
       ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
       ->whereIn('respuesta', $typeA)
       ->where('idPlaneacion', $id)
       ->get();

       $oportunidad=DB::table('respuesta_analisis')
       ->select('nombre')
       ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
       ->whereIn('respuesta', $typeO)
       ->where('idPlaneacion', $id)
       ->get();

       $typeF = ['fAlta', 'fMedia', 'fBaja'];
       $typeD = ['dAlta', 'dMedia', 'dBaja'];

       $fortaleza= DB::table('respuesta_capacidad')
       ->select('nombre')
       ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
       ->whereIn('respuesta', $typeF)
       ->where('idPlaneacion', $id)
       ->get();

       $debilidad= DB::table('respuesta_capacidad')
       ->select('nombre')
       ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
       ->whereIn('respuesta', $typeD)
       ->where('idPlaneacion', $id)
       ->get();

       $debilidad1 = DB::table('respuesta_capacidad')
       ->select('nombre')
       ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
       ->whereIn('respuesta', $typeD)
       ->where('idPlaneacion', $id)
       ->get();

       $oportunidad2=DB::table('respuesta_analisis')
       ->select('nombre')
       ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
       ->whereIn('respuesta', $typeO)
       ->where('idPlaneacion', $id)
       ->get();


       
    
       $amenaza1= DB::table('respuesta_analisis')
       ->select('nombre')
       ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
       ->whereIn('respuesta', $typeA)
       ->where('idPlaneacion', $id)
       ->get();


       $amenaza2= DB::table('respuesta_analisis')
       ->select('nombre')
       ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
       ->whereIn('respuesta', $typeA)
       ->where('idPlaneacion', $id)
       ->get();

       $fortaleza2= DB::table('respuesta_capacidad')
       ->select('nombre')
       ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
       ->whereIn('respuesta', $typeF)
       ->where('idPlaneacion', $id)
       ->get();

       $fortaleza1= DB::table('respuesta_capacidad')
       ->select('nombre')
       ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
       ->whereIn('respuesta', $typeF)
       ->where('idPlaneacion', $id)
       ->get();

       $fortaleza3= DB::table('respuesta_capacidad')
       ->select('nombre')
       ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
       ->whereIn('respuesta', $typeF)
       ->where('idPlaneacion', $id)
       ->get();

       $oportunidad3=DB::table('respuesta_analisis')
       ->select('nombre')
       ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
       ->whereIn('respuesta', $typeO)
       ->where('idPlaneacion', $id)
       ->get();



       $debilidad3 = DB::table('respuesta_capacidad')
       ->select('nombre')
       ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
       ->whereIn('respuesta', $typeD)
       ->where('idPlaneacion', $id)
       ->get();



       $amenaza3= DB::table('respuesta_analisis')
       ->select('nombre')
       ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
       ->whereIn('respuesta', $typeA)
       ->where('idPlaneacion', $id)
       ->get();


       $debilidad4 = DB::table('respuesta_capacidad')
       ->select('nombre')
       ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
       ->whereIn('respuesta', $typeD)
       ->where('idPlaneacion', $id)
       ->get();


       $oportunidad4=DB::table('respuesta_analisis')
       ->select('nombre')
       ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
       ->whereIn('respuesta', $typeO)
       ->where('idPlaneacion', $id)
       ->get();






        return view('Modulo2.analisisDofa')->with(compact('amenaza','id','oportunidad','amenaza1','fortaleza','debilidad','debilidad1','oportunidad2','fortaleza1','amenaza2','fortaleza2','fortaleza3','oportunidad3','debilidad3','amenaza3','oportunidad4','debilidad4'));

   }
   
   public function dofa2($id){

      
      $typeA = ['aAlta', 'aMedia', 'aBaja'];
      $typeO = ['oAlta', 'oMedia', 'oBaja'];

      $amenaza= DB::table('respuesta_analisis')
      ->select('nombre')
      ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
      ->whereIn('respuesta', $typeA)
      ->where('idPlaneacion', $id)
      ->get();

      $oportunidad=DB::table('respuesta_analisis')
      ->select('nombre')
      ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
      ->whereIn('respuesta', $typeO)
      ->where('idPlaneacion', $id)
      ->get();

      $typeF = ['fAlta', 'fMedia', 'fBaja'];
      $typeD = ['dAlta', 'dMedia', 'dBaja'];

      $fortaleza= DB::table('respuesta_capacidad')
      ->select('nombre')
      ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
      ->whereIn('respuesta', $typeF)
      ->where('idPlaneacion', $id)
      ->get();

      $debilidad= DB::table('respuesta_capacidad')
      ->select('nombre')
      ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
      ->whereIn('respuesta', $typeD)
      ->where('idPlaneacion', $id)
      ->get();

      $debilidad1 = DB::table('respuesta_capacidad')
      ->select('nombre')
      ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
      ->whereIn('respuesta', $typeD)
      ->where('idPlaneacion', $id)
      ->get();

      $oportunidad2=DB::table('respuesta_analisis')
      ->select('nombre')
      ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
      ->whereIn('respuesta', $typeO)
      ->where('idPlaneacion', $id)
      ->get();


      
   
      $amenaza1= DB::table('respuesta_analisis')
      ->select('nombre')
      ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
      ->whereIn('respuesta', $typeA)
      ->where('idPlaneacion', $id)
      ->get();


   

      $fortaleza2= DB::table('respuesta_capacidad')
      ->select('nombre')
      ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
      ->whereIn('respuesta', $typeF)
      ->where('idPlaneacion', $id)
      ->get();

      $fortaleza1= DB::table('respuesta_capacidad')
      ->select('nombre')
      ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
      ->whereIn('respuesta', $typeF)
      ->where('idPlaneacion', $id)
      ->get();

      $fortaleza3= DB::table('respuesta_capacidad')
      ->select('nombre')
      ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
      ->whereIn('respuesta', $typeF)
      ->where('idPlaneacion', $id)
      ->get();

      $oportunidad3=DB::table('respuesta_analisis')
      ->select('nombre')
      ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
      ->whereIn('respuesta', $typeO)
      ->where('idPlaneacion', $id)
      ->get();



      $debilidad3 = DB::table('respuesta_capacidad')
      ->select('nombre')
      ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
      ->whereIn('respuesta', $typeD)
      ->where('idPlaneacion', $id)
      ->get();



      $amenaza3= DB::table('respuesta_analisis')
      ->select('nombre')
      ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
      ->whereIn('respuesta', $typeA)
      ->where('idPlaneacion', $id)
      ->get();


      $debilidad4 = DB::table('respuesta_capacidad')
      ->select('nombre')
      ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
      ->whereIn('respuesta', $typeD)
      ->where('idPlaneacion', $id)
      ->get();


      $oportunidad4=DB::table('respuesta_analisis')
      ->select('nombre')
      ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
      ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
      ->whereIn('respuesta', $typeO)
      ->where('idPlaneacion', $id)
      ->get();






       return  redirect()->route('dofaSelec')->with(compact('amenaza','id','oportunidad','amenaza1','fortaleza','debilidad','debilidad1','oportunidad2','fortaleza1','fortaleza2','fortaleza3','oportunidad3','debilidad3','amenaza3','oportunidad4','debilidad4'));

  }





 
}
