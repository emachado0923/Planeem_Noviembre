@extends('layouts.nav2')

@section('content')
<header>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
        <script src=" {{asset('js/toastr.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection

	<div class="contenedor4">
		<h1 class="titulo2estraMod3">Matriz de  Evaluación de  Factores  Externos</h1><br>
		<p>
            La Matriz de evaluación de factores externos también denominada (MEFE) es un instrumento para formular estrategias.
            En esta matriz se resumen y evalúan las amenazas y oportunidades más importantes analizadas en factores económicos,
            sociales culturales demográficos, ambientales políticos, gubernamentales, legales, tecnológicos y competitivos.

		</p>
	</div>
	<form method="post"  role="from" action="{{route('FactorExter')}}">
		@csrf
		<input style="display: none" type="text" name="planeacion" value="{{ $planeacion }}">
		<button style="color:white;" onclick="mensaje()" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</button>
	</form>

	<span class="icon-info icon-infoMod3" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="font-weight: bold;">Desarrollo de la Matriz de Evaluación de Factores Externos:</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					<ol style="line-height: 17px; margin-top: 1%;">
						<br>
						<p>
                        A continuación, encontrará una lista de factores donde se muestran las amenazas y oportunidades de su empresa.
                        Estas son el resultado de la realización de la Matriz Pestal y la 5 fuerzas de Porter.
                       <br><br>
                        Para poder desarrollar la matriz debe seguir los siguientes pasos:
                        <br>
                        1.En la casilla peso ponderado: Asignar un peso entre 0.0 (no importante) hasta 1.0 (muy importante),
                        el peso otorgado a cada factor expresa la importancia relativa del mismo, y el total de todos los
                        pesos en su conjunto debe tener la suma de 1.0.
                        <br><br>
                        2.En la casilla calificación: Asignar una calificación entre 1 y 4 a cada uno de los factores donde:
                        <br>1.=Mayor debilidad
                        <br>2.=Menor debilidad
                        <br>3.=Menor fuerza
                        <br>4.=Mayor fuerza
                        <br><br>
                        La Sumatoria total de las calificaciones ponderadas de cada factor permiten determinar el total
                        ponderado de la empresa en su conjunto, teniendo en cuenta las siguientes interpretaciones:
                        Entre más cercano este el puntaje de valor ponderado a 4,0 significa que la empresa está
                        respondiendo de manera efectiva a las oportunidades y amenazas presentes en su mercado.
                        Los valores inferiores a 2,5 significan que no se están aprovechando las oportunidades ni evitando las amenazas.
						</p>	



                    </ol>
				</div>
			</div>
		</div>
	</div>
	@jquery
	@toastr_js
	@toastr_render
</section>
@yield('script')

<script>
  function mensaje(){

	//toastr.success('Recuerda que los campos a continuacion son obligatorios', 'hola');
	alert("Recuerda que los campos a continuacion son obligatorios")
}
</script>

<script>

	$(document).ready(function () {
		$('.items li:nth-child(9)').addClass("acti");
		$('.items li').click(function () {
			$('.items li').removeClass("acti");
			$(this).addClass("acti");


		})

		$('.valores').mouseenter(function(){
			let mensaje = $(this).attr('mensaje');

			$('.hover').html(`<p>${mensaje}</p>`)
			$('.hover').show()

		})
		$('.valores').mouseleave(function(){

			$('.hover').hide()
		})
	})
</script>
@endsection
