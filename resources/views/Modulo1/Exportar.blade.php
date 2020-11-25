<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PlaneEm</title>
        
        <style>
         @page { margin: 180px 50px; }
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; text-align: center; opacity: 0.6; }
    #footer { position: fixed; left: 0px; bottom: -130px; right: 0px; height: 150px; text-align: center; opacity: 0.6;}
    #footer .page:after { content: counter(page, upper-roman); }
    </style>
    </head>
    <body>

    <div id="header">
    <!-- <img src="{{ asset('img/planeemlogo.png')}}"> -->
    <img src="img/planeemlogo.png">
  </div>

  <div id="footer">
  <!-- <img src="{{ asset('img/sssena.png')}}"> -->
  <img src="img/sssena.png">
  </div>

        <h3 text-align='center'>Datos Generales</h3>
        <div class="contenido">
    
     @foreach ($planeacion as $plan)
         
     @endforeach  
     <span>Nombre de su planeación: </span><span id="planeacion" >{{$plan->nombre_proyecto}}</span>
    
    <br>
         <span>Fecha: </span> <span>
         {{ date('Y-m-d H:i:s') }}
        </span>
      
         </div>

         <h4 style="color:#00544A;text-align: left"><strong style="color:#00544A;text-align: left">Pensamiento y direccionamiento estratégico</strong></h4>
         
         <div> 
         <strong >Propuesta Valor:</strong>
         <br>
         @foreach($pensamiento as $pens)
            <p id="propuesta">{{$pens->Propuesta_valor}}</p>
            @endforeach
        </div>
        <br>
        <div>
        <strong >Misión Organizacional:</strong>
         <br>
         @foreach($pensamiento as $pens)
            <p id="mision">{{$pens->Mision_Organizacional}}</p>
            @endforeach
        </div>
        <br>
        <div>
        <strong >Visión Organizacional:</strong>
         <br>
         @foreach($pensamiento as $pens)
            <p id="vision">{{$pens->Vision_Organizacional}}</p>
            @endforeach
        </div>
        <br>
        <div>
        <strong >Mega Empresarial:</strong>
         <br>
         @foreach($pensamiento as $pens)
            <p id="vision">{{$pens->Mega_Empresarial}}</p>
            @endforeach
        </div>
        <br>
        <div>
        <strong >Valores Corporativos</strong>
        <br>
         @foreach($valor as $val)
            <span><strong id="valor">{{$val->valores}}</strong></span>
            <p>{{$val->descripcion}}</p>
          
         @endforeach
  
        </div>

    </body>

</html>