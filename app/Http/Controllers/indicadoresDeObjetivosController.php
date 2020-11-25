<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\formulacionestrategias;
use DB;
use App\Model\tipo_Matriz_crecimiento;

// Consulta a la base de datos de formulación Estrategias
class IndicadoresDeObjetivosController extends Controller
{
    //
    public function index ($id){

      $ca4=['noaplica'];
        $formulacionestrategias=DB::table('respustaverbos')
            ->select('respustaverbos.*','planeacion.nombre_proyecto')
           // ->join('resumen_objetivos', 'respustaverbos.id_respustaverbos', '=', 'resumen_objetivos.objetivos_v')
            ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','respustaverbos.id_respustaverbos')
            ->join('planeacion','respustaverbos.id_Planeacion','planeacion.id_Planeacion')
            ->where('resumenestrategias2.calificacion','!=',$ca4)
            ->where('respustaverbos.id_Planeacion',$id)
            ->get();

        return response()->json($formulacionestrategias);
        /* $formulacionestrategias=DB::table('respustaverbos')
                   ->select('respustaverbos.*','planeacion.nombre_proyecto')
                   ->join('planeacion','respustaverbos.id_Planeacion','planeacion.id_Planeacion')
                   ->where('planeacion.id_Planeacion',$id)
                   ->get();
                       return response()->json($formulacionestrategias);*/
    }

    public function indicador ($id){

        $formulacionestrategias=DB::table('respustaverbos')
            ->select('respustaverbos.*','planeacion.nombre_proyecto')
            ->join('planeacion','respustaverbos.id_Planeacion','planeacion.id_Planeacion')
            ->where('respustaverbos.id_respustaverbos',$id)
            ->get();
        // var_dump($formulacionestrategias);
        return response()->json($formulacionestrategias);
    }
}
