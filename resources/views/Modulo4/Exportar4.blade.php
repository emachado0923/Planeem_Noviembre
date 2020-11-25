<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PlaneEm</title>
        
        <style>
        
    @page { margin: 180px 50px; }
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; text-align: center; }
    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; }
    #footer .page:after { content: counter(page, upper-roman); }

    </style>
    </head>
    <body>

    <div id="header">
    <img style="align='center"src="img/planeemlogo.png">
  </div>

  <div id="footer">
  <img style="align='center"src="img/sssena.png">
  </div>

        <h3 text-align='center'>Resumen de Objetivos</h3>
        <div class="contenido">
    
        @foreach ($planeacion as $pla)
        @if ($loop->first)
     <span>Nombre de su planeación: </span><span id="planeacion" >{{$pla->nombre_proyecto}}</span>
      @endif

      @endforeach
<br>
         <span>Fecha: </span> <span>
         {{ date('Y-m-d H:i:s') }}
        </span>
      
         </div>

         <h4 style="color:#00544A;text-align: left"><strong style="color:#00544A;text-align: left">Pensamiento y direccionamiento estratégico</strong></h4>
         
         <div> 
        
         @foreach($resumenO as $res)
        <div>
        <strong>Objetivo</strong>
        <p id="resumen">{{$res->objetivos_v}}</p>
        <strong>Indicador</strong>          
        <p id="indicadr">{{$res->nombre_indicador}}</p>
        <strong>Lo que se mide</strong>  
        <p id="loque">{{$res->lo_que_se_va_a_medir}}</p>
        <strong>Sobre lo que se mide</strong>
        <p id="sobre">{{$res->sobre_lo_que_se_va_a_medir}}</strong></span>
        </div>

           
            
           
            @endforeach
        </div>
       
    </body>
    <footer>

    </footer>
</html>