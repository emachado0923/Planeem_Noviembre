<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Proyectos;
use App\Model\pensamiento_pensamiento;
use App\Model\Corporativos;
class WordTestController extends Controller
{
    //

    public function createWordDocx(Request $request)
    {
        $wordTest = new \PhpOffice\PhpWord\PhpWord();
        $newSection = $wordTest->addSection();
        $nombre_proyecto = $request->input('nombre_proyecto');
        $Propuesta = $request->input('Propuesta');
        $Mision= $request->input('Mision');
        $Vision = $request->input('Vision');
        $Mega = $request->input('Mega');
        $valores = $request->input('valores');

       
       $encabezado = $newSection->addHeader();
       $encabezado->addimage("img/planeemlogo.png",array('width'=>175, 'height'=>75, 'align'=>'center'));
     //  $newSection->addText('Datos Generales',array('name' => 'Arial', 'size' => 14, 'align'=>'center','color' => '#00544A','bold'=>true,''=>'center'));
       $newSection->addimage('img/titulomodulo1.png', array('width'=>141, 'height'=>22, 'align'=>'center', 'marginTop'=>'0.2'));
       $newSection->addTextBreak(1);
       $newSection->addText('Nombre de su planeación:',array('name' => 'Arial', 'size' => 12, 'color' => 'black'));
       $newSection->addText('Fecha:',array('name' => 'Arial', 'size' => 12, 'color' => 'black'));
       $newSection->addTextBreak(1);
       $newSection->addText('Pensamiento y direccionamiento estratégico',array('name' => 'Arial', 'size' => 12, 'color' => '#00544A','bold'=>true));
       $footer = $newSection->addFooter();
       $footer->addimage("img/sssena.png",array('width'=>380, 'height'=>105, 'align'=>'center'));
       //$footer->addimage("img/senalogon.png",array('width'=>50, 'height'=>50, 'align'=>'left'));



      

      //  $newSection->addimage('img/planeemlogo.png', array('width'=>100, 'height'=>100, 'align'=>'center', 'marginTop'=>'0.2'));
      // $newSection->addText('PlaneEm',array('name' => 'Times New Roman', 'size' => 40, 'align'=>'center','color' => '#00544A'));
       $newSection->addTextBreak(1);
        if($Propuesta == 'Propuesta_valor'){
           
            $Propuesta_valor = pensamiento_pensamiento::select('Propuesta_valor')
              ->where('id_Planeacion',$nombre_proyecto)
              ->first();
            $newSection->addText('Propuesta valor:',array('name' => 'Arial', 'size' => 12, 'color' => 'black','bold'=>true));
            $newSection->addText($Propuesta_valor->Propuesta_valor, array('name' => 'Arial', 'size' => 12, 'color' => 'black'));
           




        }else{
            $Propuesta_valor = " ";
            $newSection->addText($Propuesta_valor);
        }



        if($Mision == "Mision_Organizacional"){
             $Mision_Organizacional = pensamiento_pensamiento::select('Mision_Organizacional')
             ->where('id_Planeacion',$nombre_proyecto)
             ->first();
             $newSection->addText('Misión Organizacional:',array('name' => 'Arial', 'size' => 12, 'color' => 'black','bold'=>true));
             $newSection->addText($Mision_Organizacional->Mision_Organizacional,array('name' => 'Arial', 'size' => 12, 'color' => 'black'));

        }else{
            $Mision_Organizacional = " ";
            $newSection->addText($Mision_Organizacional);
        }

        if($Vision  == "Vision_Organizacional"){
             $Vision_Organizacional =pensamiento_pensamiento::select('Vision_Organizacional')->where('id_Planeacion',$nombre_proyecto)->first();
            $newSection->addText('Visión Organizacional:',array('name' => 'Arial', 'size' => 12, 'color' => 'black','bold'=>true));
             $newSection->addText($Vision_Organizacional->Vision_Organizacional,array('name' => 'Arial', 'size' => 12, 'color' => 'black'));
        }else{
            $Vision_Organizacional = " ";
            $newSection->addText($Vision_Organizacional);
        }


        if($Mega  == "Mega_Empresarial"){
             $Mega_Empresarial =pensamiento_pensamiento::select('Mega_Empresarial')
             ->where('id_Planeacion',$nombre_proyecto)
             ->first();
             $newSection->addText('Mega Empresarial',array('name' => 'Arial', 'size' => 12, 'color' => 'black','bold'=>true));
            $newSection->addText($Mega_Empresarial->Mega_Empresarial,array('name' => 'Arial', 'size' => 12, 'color' => 'black'));

        }else{
            $Mega_Empresarial = " ";
            $newSection->addText($Mega_Empresarial);
        }

        if($valores  == "v"){

             $valores_corporativos=Corporativos::select('valores','descripcion')
             ->where('id_Planeacion',$nombre_proyecto)
             ->where('valores','<>','NULL')->get();
             $newSection->addText('Valores Corporativos: ',array('name' => 'Arial', 'size' => 12, 'color' => 'black','bold'=>true));
           
            foreach($valores_corporativos as $valores_corporativos){
                $newSection->addText($valores_corporativos->valores,array('name' => 'Arial', 'size' => 12, 'color' => 'black','bold'=>true));
                $newSection->addText($valores_corporativos->descripcion,array('name' => 'Arial', 'size' => 12, 'color' => 'black'));
            }
        }else{
            $valores_corporativos= " ";
            $newSection->addText($valores_corporativos);
        }

        $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');
            try {
                $objectWriter->save(storage_path('Prueba.docx'));
            } catch (Exception $e) {

            }
        return response()->download(storage_path('Prueba.docx'));
    }
}
