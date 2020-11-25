@extends('layouts.nav4')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
</header>
<h2 class="titulo2estraMod3">Módulo 4</h2>
<p class="parrafoMod3">
	<br>
	Un indicador es una característica específica, observable y medible que puede ser usada para mostrar los
	cambios y progresos que está haciendo un programa hacia el logro de un resultado específico. Es decir, se trata
	de una escala que permitirá medir el grado de alcance de la meta prevista. Con el objetivo de aportar a la
	empresa un camino correcto para que ésta logre cumplir con las metas establecidas.
	<br>
	A continuación, encontraras 5 tipos de indicadores que se pueden implementar en su empresa
	<br>
	*Tipos de
	<br>
	1. Indicadores de cumplimiento: Indican el grado de consecución de tareas y/o trabajos.
	<br>
	2. Indicadores de evaluación: Están relacionados con los métodos y por lo tanto ayudan a identificar
	fortalezas, debilidades y oportunidades de mejora.
	<br>
	3. Indicadores de eficiencia: Indican el tiempo y los recursos invertidos en la consecución de tareas y/o
	trabajos.
	<br>
	4. Indicadores de eficacia: Indican capacidad o acierto en la consecución de tareas y/o trabajos.
	<br>
	5. Indicadores de gestión: Permiten administrar realmente un proceso.</p>
	<div class="containerBtnsMod3">
		<a href="{{route('vista1-3')}} " name="nuevo" class="siguienteMod3 Ahora">Iniciar Ahora</a>
	</div>
<!--<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>-->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
				<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
				margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

			</div>
			<div class="modal-body">
				<p>
					Como realizar la calificación de la Matriz PCI (Perfil de Capacidad interna)

					Para realizar la calificación de la matriz se debe seleccionar la capacidad, identificar si
					es una fortaleza o debilidad para la empresa, luego si:
					<br><br>
					1. Es una fortaleza se debe calificar D si es débil (débil), M si es (media) y A si es (alta)
					<br>
					2. Es debilidad debo calificar si es D si es débil (débil), M si es (media) y A si es (alta)
					Luego, se califica que impacto tiene esa debilidad o fortaleza para la empresa: D(débil),
					M (media), A(alta)
				</p>
			</div>
		</div>
	</div>

	</section>
	@yield('script')
	<script>
		$(document).ready(function() {
			$('.items3 li:nth-child(1)').addClass("acti3");
			$('.items3 li').click(function() {
				$('.items3 li').removeClass("acti3");
				$(this).addClass("acti3");


			})

			$('.valores').mouseenter(function() {
				let mensaje = $(this).attr('mensaje');

				$('.hover').html(`<p>${mensaje}</p>`)
				$('.hover').show()

			})
			$('.valores').mouseleave(function() {

				$('.hover').hide()
			})
		})
	</script>


	@endsection