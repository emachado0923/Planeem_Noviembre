@extends('layouts.nav3')

@section('content')

<header>
	@yield('js')

<!-- Se agrega div contenedor para arreglar los estilos -->
	<div class="containerTituloestraMod3">
		<img class="imgdiagnosticoMod3" src="img/diagnostico.png">
		<h2 class="tituloestraMod3">Diseño y formulación de estrategias</h2>
	</div>
	<br>
	<div>
<!-- Se cambia la clase -->
		<p class="parrafoMod3">El desarrollo de este módulo 3, le ayudará a realizar la formulación estratégica de su empresa con la construcción
			de objetivos,estrategias y acciones en el corto, mediano y largo plazo.<br> En este módulo usted encontrará los siguientes ítems.
			<br>
			<br>1. Diseño de objetivos
			<br>2. Formulación de estrategias.
			<br>3. Acciones estratégicas.
			<br>4. Resultado de Objetivos, estrategias y acciones.
			<br><br>! Recuerde que las estrategias que usted verá en este módulo fueron las seleccionadas en el anterior ¡
		</p>
	</div>
	<br>
	<!-- Se agrega div contenedor y cambia la clase -->
	<div class="containerBtnsMod3">
		<a href="{{ route('DisenoObjetivos2') }} " name="nuevo" class="siguienteMod3">Siguiente</a>
	</div>

	<span class="icon-info icon-infoMod3" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<!-- Se añade clase modal-contentMod3 -->
			<div class="modal-content modal-contentMod3">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 28px; cursor: pointer; margin-top: 2px;
						margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					<!-- Se cambia la clase -->
					<p class="parrafoInfoMod3">
						Existen 3 tipos de objetivos fundamentales que usted podrá construir:
						<br>1. Objetivos estratégicos: Aquí se plantean objetivos que persiguen el crecimiento del negocio y su sostenibilidad en el tiempo,
						<br>2. Objetivos tácticos: Corresponden al nivel de los departamentos que conforman la estructura organizacional. (Área Administrativa, Producción, Comercial y Mercadeo, Financiera, Contable, Talento Humano, Logística y Soporte Técnico),
						<br>3. Objetivos operativos: Son trazados directamente por los jefes de cada departamento y son de carácter específico. (Se trata de objetivos cuyo cumplimiento se da por parte del trabajador u operario).
						<br>
						<br>.Se recomienda para la construcción de los objetivos considerar todas las áreas o procesos de la organización. (Proceso Administrativo, de Producción, Comercial y de Mercadeo, Financiero, Contable, Recursos Humanos, y Logístico)


					</p>
				</div>
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