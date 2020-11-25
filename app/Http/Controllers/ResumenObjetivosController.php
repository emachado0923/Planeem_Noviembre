<?php
//Este Controlador es el que le va a tener
//las reglas del negocio del guardar del modulo 4
namespace App\Http\Controllers;
use App\Model\ResumenObjetivos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\respuestaverbos;
use App\Http\Requests\Modulo4Request;



class ResumenObjetivosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $id)
    {


       $resumen = DB::table('resumen_objetivos')
       ->select('resumen_objetivos.*','v.id_respustaverbos as objetivo','v.Objetivos' ,'resumen_objetivos.nombre_indicador as indicador','p.id_Planeacion as id_Planeacion', 'resumen_objetivos.lo_que_se_va_a_medir', 'resumen_objetivos.sobre_lo_que_se_va_a_medir')
       ->join('respustaverbos as v', 'id_respustaverbos', '=', 'objetivos_v')
       ->join('planeacion as p', 'p.id_Planeacion', '=', 'resumen_objetivos.id_Planeacion') ->get();



        return response()->json($resumen);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $respuesta = DB::table('respustaverbos')->select('Objetivos' , 'id_respustaverbos')->get();
        $respuesta = DB::table('planeacion')->select('id_Planeacion' , 'nombre_proyecto')->get();
        return view('Modulo4.vista1-3', compact('respuesta'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $resumen = new ResumenObjetivos();

        $resumen->objetivos_v=$request->id_respustaverbos;
        $resumen ->id_Planeacion = $request->id_Planeacion;
        $resumen ->nombre_indicador=$request->nombre_indicador;
        $resumen ->lo_que_se_va_a_medir= $request->lo_que_se_va_a_medir;
        $resumen ->sobre_lo_que_se_va_a_medir = $request->sobre_lo_que_se_va_a_medir;

        $resumen->save();
        $paso=$request->paso;
       // return Redirect::to('Modulo4/vista1-3');
       //return back()->with('Agregar','La estrategia se ha agregado correctamente');
        return response()->json(['paso'=>$paso]);

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
        $resumen = ResumenObjetivos::findOrFail($id);

        $objetivos= DB::table('respustaverbos')->select('Objetivo' , 'id_respustaverbos')->get();
        return view('Modulo4.vista1-3', compact('resumen','objetivos'));
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


