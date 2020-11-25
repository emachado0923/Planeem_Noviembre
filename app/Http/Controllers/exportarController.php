<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class exportarController extends Controller
{

    public function exportar() {
        $documento = new \PhpOffice\PhpWord\PhpWord();
     //   $section = $Test->addSection();
        $seccion = $documento->addSection();
        $estiloTabla = [
            "borderColor" => "8bc34a",
            "borderSize" => 5,
        ];

        $documento->addTableStyle("estilo1", $estiloTabla);

        $tabla = $seccion->addTable("estilo1"); # Agregar tabla con el estilo que guardamos antes
        $tabla->addRow(); # Agregar fila
        $celda = $tabla->addCell(); # Agregar celda
        $celda->addText("Dentro de una celda");
        $celda = $tabla->addCell(); # Agregar celda
        $celda->addText("Dentro de una celda");

        $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($documento, 'Word2007');
        try {
            $objectWriter->save(storage_path('TestWordFile.docx'));
        } catch (Exception $e) {
        }

        return response()->download(storage_path('TestWordFile.docx'));


    }


}

