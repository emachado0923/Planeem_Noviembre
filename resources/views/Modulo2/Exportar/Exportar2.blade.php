<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>PlaneEm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    {{-- <link href="{css/app.css" rel="stylesheet">

	<link rel="stylesheet" href="css/estilos_modulo1/estilos_modulo1.css">
	<link rel="stylesheet" href="css/estilos_modulo1/estilos_resposiveII.css"> --}}

    <style>
        @page {
            margin: 180px 50px;
        }

        #header {
            position: fixed;
            left: 0px;
            top: -180px;
            right: 0px;
            height: 150px;
            text-align: center;
        }

        #footer {
            position: fixed;
            left: 0px;
            bottom: -180px;
            right: 0px;
            height: 150px;
        }

        #footer .page:after {
            content: counter(page, upper-roman);
        }

    </style>
</head>

<body>

    <div id="header">
        <img style="align='center" src="img/planeemlogo.png">
    </div>

    <div id="footer">
        <img style="align='center" src="img/sssena.png">
    </div>

    <h3 text-align='center'>Datos Generales</h3>
    <div class="contenido">

        @foreach ($planeacion as $plan)

        @endforeach
        <span>Nombre de su planeación: </span><span id="planeacion">{{$plan->nombre_proyecto}}</span>

        <br>
        <span>Fecha: </span> <span>
            {{ date('Y-m-d H:i:s') }}
        </span>

    </div>

    <h4 style="color:#00544A;text-align: left"><strong style="color:#00544A;text-align: left">Diagnóstico
            estratégico</strong></h4>

    <h5>1. Analisis interno</h5>
    <h5>Perfil Capacidad Interna</h5>

     <!--Capacidad Directiva-->
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center;">
                <th scope="col" rowspan="2">Capacidad Directiva</th>
                <th style="width: 90px;" scope="col" colspan="3">Fortalezas</th>
                <th style="width: 90px;" scope="col" colspan="3">Debilidades</th>
                <th style="width: 80px;" scope="col">No aplica</th>
            </tr>
            <tr style="text-align: center">
                <th>A</th>
                <th>M</th>
                <th>B</th>
                <th>A</th>
                <th>M</th>
                <th>B</th>
                <th>N</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($capacidadDirectiva as $capDirec)
            <tr style="text-align: center;">
                <td>{{$capDirec->Nombre_Capacidad}}</td>
                @switch($capDirec->respuesta)
                @case('dAlta')
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('dMedia')
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                @break
                @case('dBaja')
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                @break
                @case('fAlta')
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('fMedia')
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('fBaja')
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @default
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                @endswitch
            </tr>
            @endforeach
        </tbody>
    </table>
    <!--Capacidad Competitiva-->
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center">
                <th scope="col" rowspan="2">Capacidad Competitiva</th>
                <th style="width: 90px;" scope="col" colspan="3">Fortalezas</th>
                <th style="width: 90px;" scope="col" colspan="3">Debilidades</th>
                <th style="width: 80px;" scope="col">No aplica</th>
            </tr>
            <tr style="text-align: center">
                <th>A</th>
                <th>M</th>
                <th>B</th>
                <th>A</th>
                <th>M</th>
                <th>B</th>
                <th>N</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($capacidadCompetitiva as $capCope)
            <tr style="text-align: center">
                <td>{{$capCope->Nombre_Capacidad}}</td>
                @switch($capCope->respuesta)
                @case('dAlta')
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('dMedia')
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                @break
                @case('dBaja')
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                @break
                @case('fAlta')
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('fMedia')
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('fBaja')
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @default
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                @endswitch
            </tr>
            @endforeach
        </tbody>
    </table>
    <!--Capacidad Financiera-->
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center">
                <th scope="col" rowspan="2">Capacidad Financiera</th>
                <th style="width: 90px;" scope="col" colspan="3">Fortalezas</th>
                <th style="width: 90px;" scope="col" colspan="3">Debilidades</th>
                <th style="width: 80px;" scope="col">No aplica</th>
            </tr>
            <tr style="text-align: center">
                <th>A</th>
                <th>M</th>
                <th>B</th>
                <th>A</th>
                <th>M</th>
                <th>B</th>
                <th>N</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($capacidadFinanciera as $capFina)
            <tr style="text-align: center">
                <td>{{$capFina->Nombre_Capacidad}}</td>
                @switch($capFina->respuesta)
                @case('dAlta')
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('dMedia')
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                @break
                @case('dBaja')
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                @break
                @case('fAlta')
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('fMedia')
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('fBaja')
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @default
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                @endswitch
            </tr>
            @endforeach
        </tbody>
    </table>
    <!--Capacidad Tecnologica-->
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center">
                <th scope="col" rowspan="2">Capacidad Tecnológica</th>
                <th style="width: 90px;" scope="col" colspan="3">Fortalezas</th>
                <th style="width: 90px;" scope="col" colspan="3">Debilidades</th>
                <th style="width: 80px;" scope="col">No aplica</th>
            </tr>
            <tr style="text-align: center">
                <th>A</th>
                <th>M</th>
                <th>B</th>
                <th>A</th>
                <th>M</th>
                <th>B</th>
                <th>N</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($capacidadTecnologica as $capTecno)
            <tr style="text-align: center">
                <td>{{$capTecno->Nombre_Capacidad}}</td>
                @switch($capTecno->respuesta)
                @case('dAlta')
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('dMedia')
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                @break
                @case('dBaja')
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                @break
                @case('fAlta')
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('fMedia')
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('fBaja')
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @default
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                @endswitch
            </tr>
            @endforeach
        </tbody>
    </table>
    <!--Capacidad Talento humano-->
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center">
                <th scope="col" rowspan="2">Capacidad de Talento Humano</th>
                <th style="width: 90px;" scope="col" colspan="3">Fortalezas</th>
                <th style="width: 90px;" scope="col" colspan="3">Debilidades</th>
                <th style="width: 80px;" scope="col">No aplica</th>
            </tr>
            <tr style="text-align: center">
                <th>A</th>
                <th>M</th>
                <th>B</th>
                <th>A</th>
                <th>M</th>
                <th>B</th>
                <th>N</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($capacidadTalentoHumano as $capTHuman)
            <tr style="text-align: center">
                <td>{{$capTHuman->Nombre_Capacidad}}</td>
                @switch($capTHuman->respuesta)
                @case('dAlta')
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('dMedia')
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                @break
                @case('dBaja')
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                @break
                @case('fAlta')
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('fMedia')
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @case('fBaja')
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @break
                @default
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>X</td>
                @endswitch
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>
    <h5>Perfil Competitivo </h5>
    <!--Encabezado perfil competitivo-->
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center">
                <th scope="col">ANALISIS CON LA MPC</th>
            </tr>
            <tr style="text-align: center">
                @foreach ($perfil_compe as $perfil_C)
                    
                @endforeach
                <th style="width: 90px;" scope="col">{{$perfil_C->nombreEmpresa}}</th>
            </tr>
        </thead>
    </table>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>Peso Relativo</th>
                <th>Calificaciòn</th>
                <th>Peso Ponderado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perfil_compe as $perfil_C)
            <tr style="text-align: center">
                <td>{{$perfil_C->nombre}}</td>
                <td>{{$perfil_C->pesoRelativo}}</td>
                <td>{{$perfil_C->calificacion}}</td>
                <td>{{$perfil_C->pesoPonderado}}</td>
            </tr>
            @endforeach
            <tr style="text-align: center"s>
                <td>Resultado del Diagnostico</td>
                <td></td>
                <td></td>
                <td></td> 
            </tr>
        </tbody>
    </table>
    <br>
    <h5>Competencias</h5>
    {{-- Tabla de competencias --}}
    @foreach ($perfil_compe_empresa as $pcm)
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center">
                <th colspan="2" scope="col">Competencia: {{$pcm->nombreEmpresa}}</th>
            </tr>
            <tr style="text-align: center">
                <th>Calificación</th>
                <th>Peso Ponderado</th>
            </tr>
        </thead>
        <tbody>
            <tr style="text-align: center">
                <td>{{$pcm->calificacion}}</td>
                <td>{{$pcm->pesoPonderado}}</td>
            </tr>
        </tbody>
    </table> 
    @endforeach

    <h5>Evaluación de Factores Internos </h5>

    <h5>2. Análisis Externo </h5>

    <h5>Análisis Pestal </h5>

    <h5>Análisis Porter </h5>

    <h5>Matriz de Crecimiento </h5>

    <h5>Evaluación de Factores externos</h5>

    <h5>3. Resultados del Diagnostico </h5>

    <h5>Resultados Análisis EFI EFE </h5>
    <!--Graficas-->

    <h5>Resultados Análisis DOFA</h5>

    <h5>Resultados Análisis Matriz de Crecimiento </h5>
    <!--Graficas-->

    <h5>Selección de estrategias </h5>
</body>

</html>
