<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Corporativos;
use MessageFormatter;
use Validator, DB, Hash, Mail, Auth;
use App\Model\tipo_Matriz_crecimiento;

class CorporativosController extends Controller
{






    public function store(Request $request)
    {
        $id_Planeacion = $request->input('id_Planeacion');
        $valores1 = $request->input('valores');
        $descripcion = $request->input('descripcion');

        try {
            for ($i = 0; $i < count($valores1); $i++) {
                if ($valores1[$i] != null &&  $descripcion[$i] != null) {
                    Corporativos::updateOrCreate([
                        'valores' => $valores1[$i],
                        'id_Planeacion' => $id_Planeacion,
                        'descripcion' => $descripcion[$i]
                    ]);
                }
            }
            return view('Modulo1.Corporativos.vista29');
        } catch (\Throwable $th) {
            return view('Modulo1.Corporativos.vista29');
        }
    }
}
