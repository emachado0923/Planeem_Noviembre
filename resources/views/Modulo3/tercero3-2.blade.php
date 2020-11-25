@extends('layouts.nav3')

@section('content')

<header>
	<div>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
	<style>
		.campo_estrategiaX::-webkit-scrollbar {
			width: 7px;
		}

		.campo_estrategiaX::-webkit-scrollbar-thumb {
			background: grey;
			border-radius: 5px;
		}

		.campo_estrategiaX {
			border: 2px solid #0AB5A0;
			border-radius: 10px;
			outline: none;
			padding: 10px;
		}
	</style>
	{{-- @include('modal/modal3') --}}
</header>

<form method="post" role="from" action="{{route('finalGuardar')}}">
	@csrf
	<input type="text" class="id" name="id" id="id" hidden>
	<div id="regiration_form" novalidate action="action.php" method="post">

		<fieldset>
			<div id="div1">
			</div>
			<button type="button" class="btnNavMod3 next">Continuar</button>
		</fieldset>

		<fieldset>
			<div id="div2">
			</div>
			<button type="button" class="btnLeftMod3 previous">Anterior</button>
			<button type="button" class="btnRightMod3 next">Continuar</button>
		</fieldset>
		<fieldset>
			<div id="div3">
			</div>
			<button type="button" class="btnLeftMod3 previous">Anterior</button>

			<button type="submit" class="btnRightMod3 next">Guardar</button>
			<!-- <button type="button" class="AhoraEstra previous btn btn-default">Anterior</button> -->
		</fieldset>

	</div>
</form>

<span class="icon-info icon-infoMod3" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content modal-contentMod3">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
				<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
				margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
			</div>
			<div class="modal-body">
				<p class="parrafoInfoMod3">
					En este item se relaciona un recuadro con los objetivos a largo plazo, la definición de la estrategia un recuadro de acción, presupuesto tiempo de ejecución y responsable, donde el usuario tiene la opción de agregar varias acciones con su tiempo, presupuesto y asignarle un responsable.
				</p>
			</div>
		</div>
	</div>
</div>

<label type="text" id="nombre"></label><br>
<!-- Modal -->


@yield('script')

<style>
	body {

		background-image: url("../img/fondoLogo.jpg");
	}

	.collapsing {
		margin-top: -20px;
		z-index: -1;

	}
</style>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Esta es de las estrategias a largo plazo------------------------>



<script>
	$(document).ready(function() {
		var id = localStorage.getItem('id');

		$.ajax({
			url: "/final1/" + id,
			type: 'get',
			success: function(data) {
				//console.log(id);
				console.log(data);

				if (data.length > 0) {
					console.log('Desde Aca');

					let html = '<h4 class="text-center">OBJETIVOS A LARGO PLAZO</h4>';
					html = html + '<div class="formulario5">';
					for (i of data) {
						if (i.length > 0) {
							//Primer ciclo I
							html = html + '    <div class="form-group col-md-12">';
							html = html + '<br>';

							// Agrega div con clase
							html = html + '<div class="containerTitulo2estraMod3">';
							html = html + ' <label class="titulo2estraMod3" for="formGroupExampleInput">Objetivo</label>';
							html = html + '</div>';
							html = html + '<textarea align="center" class="campo_estrategia2">' + i[0].Objetivos + '</textarea>';
							// html = html + '</div>';
							html = html + '<div class="containerTitulo2estraMod3">';
							html = html + '<label class="titulo2estraMod3" for="formGroupExampleInput2">Estrategia</label>';
							html = html + '</div>';
							//Segundo ciclo 
							html = html + '<div class="containerBtnsModalMod3 btn-group" id="btn_planeem">';
							for (j of i) {
								html = html + '<div>';
								//Esta es la llave que llama el modal	
								html = html + '<a data-toggle="modal" style="outline: none;background-color: #238276;border-radius: 50px;color: white !important;margin: 12px;padding: 10px 18px;cursor: pointer;float: left;" class="a" data-target="#identificador' + j.id_formulacionEstrategias + '" data-whatever="@fat">*</a>';
								html = html + '</div>';

								//Este es el modal	
								html = html + '	<div class="modal fade" id="identificador' + j.id_formulacionEstrategias + '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
								html = html + '		<div class="modal-dialog" role="document">';
								html = html + '		<div class="modal-content modalMod3">';
								html = html + '			<div class="modal-body" style="padding: 0 !important;">';
								html = html + '				<div class="opciones5">';
								html = html + '					<h5 class="titulo2estraMod3">OBJETIVOS A LARGO PLAZO</h5>';

								html = html + '					<table class="egt" id="tabla">';
								html = html + '						<thead>';
								html = html + '							<tr>';
								html = html + '							 	<label for="formGroupExampleInput2" style="text-align: center;font-size: 20px;">Estrategia</label>';
								html = html + '							 	<input name="id_Planeacion[]" id="id_Planeacion[]" value="' + j.id_Planeacion + '" hidden>';
								html = html + '							 	<input name="id_formulacionEstrategias[]" id="id_formulacionEstrategias[]" value="' + j.id_formulacionEstrategias + '" hidden>';
								html = html + '								<textarea class="campo_estrategia2">' + j.id_estrategia + '</textarea>';
								html = html + '							</tr>';
								html = html + '							<tr>';
								html = html + '								<th class="thCampo" colspan="1" style="text-align: center;border: none;font-size: 20px;" rowspan="1">Acción</th>';
								html = html + '								<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Presupuesto</th>';
								html = html + '								<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Tiempo de duración</th>';
								html = html + '								<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Responsable</th>';
								html = html + '							</tr>';
								html = html + '						</thead>';
								html = html + '						<tbody>';
								html = html + '							<tr class="formulario">';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="accion[]" id="accion[]" class="campo_estrategiaX" maxlength="100"></textarea>';
								html = html + '								</td>';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="presupuesto[]" id="presupuesto[]" class="campo_estrategiaX" maxlength="100"></textarea>';
								html = html + '								</td>';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="tiempo[]" id="tiempo[]" class="campo_estrategiaX" maxlength="100"></textarea>';
								html = html + '								</td>';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="responsable[]" id="responsable[]" class="campo_estrategiaX" maxlength="100"></textarea>';
								html = html + '								</td>';
								html = html + '							</tr>';
								html = html + '					</tbody>';
								html = html + '			</table>';
								html = html + '	</div>';
								// Agrega div con clase para el botón
								html = html + '	<div class="containerBtnsMod3">';
								html = html + '	<a data-dismiss="modal" aria-label="Close" class="siguienteMod3">Cerrar</a>';
								html = html + '	</div>';
								html = html + '	</div>';
								html = html + '	</div>';
								html = html + '	</div>';
								html = html + '</div>';
							}
							// Cierra contenedor de btn
							html = html + '</div>';
							html = html + '</div>';
						}
					}
					$('#div1').append(html);
					//Pinta el contenido en el html
					console.log('Aca Termina');
				} else {
					alert('error');
				}
			},
			"error": function() {
				console.log("error");
			}
		}); //////fin ajax
	}); ////Fin Funtion document
</script>

<!-- Esta es de las estrategias a Mediano plazo------------------------>
<script>
	$(document).ready(function() {
		var id = localStorage.getItem('id');

		$.ajax({
			url: "/final2/" + id,
			type: 'get',
			success: function(data) {
				//console.log(id);
				console.log(data);

				if (data.length > 0) {
					console.log('Desde Aca');

					let html = '<h4 class="text-center">OBJETIVOS A MEDIANO PLAZO</h4>';
					html = html + '<div class="formulario5">';
					for (i of data) {
						if (i.length > 0) {
							//Primer ciclo I
							html = html + '    <div class="form-group col-md-12">';
							// Agrega div con clase
							html = html + '<div class="containerTitulo2estraMod3">';
							html = html + ' <label class="titulo2estraMod3" for="formGroupExampleInput">Objetivo</label>';
							html = html + '</div>';
							html = html + '<textarea align="center" class="campo_estrategia2">' + i[0].Objetivos + '</textarea>';
							// html = html + '</div>';
							html = html + '<div class="containerTitulo2estraMod3">';
							html = html + '<label class="titulo2estraMod3" for="formGroupExampleInput2">Estrategia</label>';
							html = html + '</div>';
							//Segundo ciclo 
							html = html + '<div class=" containerBtnsModalMod3 btn-group" id="btn_planeem">';
							for (j of i) {
								html = html + '<div>';
								//Esta es la llave que llama el modal	
								html = html + '<a data-toggle="modal" style="outline: none;background-color: #238276;border-radius: 50px;color: white !important;margin:12px;padding: 10px 18px;cursor: pointer;float: left;" class="a" data-target="#identificador' + j.id_formulacionEstrategias + '" data-whatever="@fat">*</a>';
								html = html + '</div>';

								//Este es el modal	
								html = html + '	<div class="modal fade" id="identificador' + j.id_formulacionEstrategias + '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
								html = html + '		<div class="modal-dialog" role="document">';
								html = html + '		<div class="modal-content modalMod3">';
								html = html + '			<div class="modal-body" style="padding: 0 !important;">';
								html = html + '				<div class="opciones5">';
								html = html + '					<h5 class="titulo2estraMod3">OBJETIVOS A MEDIANO PLAZO</h5>';
								html = html + '					<table class="egt" id="tabla">';
								html = html + '						<thead>';
								html = html + '							<tr>';
								html = html + '							 <label for="formGroupExampleInput2" style="text-align: center;font-size: 20px;">Estrategia</label>';
								html = html + '							 	<input name="id_Planeacion[]" id="id_Planeacion[]" value="' + j.id_Planeacion + '" hidden>';
								html = html + '							 	<input name="id_formulacionEstrategias[]" id="id_formulacionEstrategias[]" value="' + j.id_formulacionEstrategias + '" hidden>';
								html = html + '								<textarea class="campo_estrategia2">' + j.id_estrategia + '</textarea>';
								html = html + '							</tr>';
								html = html + '							<tr>';
								html = html + '								<th class="thCampo" colspan="1" style="text-align: center;border: none;font-size: 20px;" rowspan="1">Acción</th>';
								html = html + '								<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Presupuesto</th>';
								html = html + '								<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Tiempo de duración</th>';
								html = html + '							<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Responsable</th>';
								html = html + '							</tr>';
								html = html + '						</thead>';
								html = html + '						<tbody>';
								html = html + '							<tr class="formulario">';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="accion[]" id="accion[]" class="campo_estrategiaX" maxlength="250"></textarea>';
								html = html + '								</td>';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="presupuesto[]" id="presupuesto[]" class="campo_estrategiaX" maxlength="250"></textarea>';
								html = html + '								</td>';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="tiempo[]" id="tiempo[]" class="campo_estrategiaX" maxlength="250"></textarea>';
								html = html + '								</td>';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="responsable[]" id="responsable[]" class="campo_estrategiaX" maxlength="250"></textarea>';
								html = html + '								</td>';
								html = html + '							</tr>';
								html = html + '						</tbody>';
								html = html + '				</table>';
								html = html + '			</div>';
								// Agrega div con clase
								html = html + '	<div class="containerBtnsMod3">';
								html = html + '		<a data-dismiss="modal" aria-label="Close" class="siguienteMod3">Cerrar</a>';
								html = html + '	</div>';
								html = html + '	</div>';
								html = html + '	</div>';
								html = html + '	</div>';
								html = html + '</div>';
							}
							// Cierrra contenedor de btns
							html = html + '</div>';
							html = html + '</div>';
						}
					}
					$('#div2').append(html);
					//Pinta el contenido en el html
					console.log('Aca Termina');
				} else {
					alert('error');
				}
			},
			"error": function() {
				console.log("error");
			}
		}); //////fin ajax
	}); ////Fin Funtion document
</script>

<!-- Esta es de las estrategias a Corto plazo------------------------>
<script>
	$(document).ready(function() {
		var id = localStorage.getItem('id');

		$.ajax({
			url: "/final3/" + id,
			type: 'get',
			success: function(data) {
				//console.log(id);
				console.log(data);

				if (data.length > 0) {
					console.log('Desde Aca');

					let html = '<h4 class="text-center">OBJETIVOS A CORTO PLAZO</h4>';
					html = html + '<div class="formulario5">';
					for (i of data) {
						if (i.length > 0) {
							//Primer ciclo I
							html = html + '<div class="form-group col-md-12">';
							// Agrega div con clase
							html = html + '<div class="containerTitulo2estraMod3">';
							html = html + ' <label class="titulo2estraMod3" for="formGroupExampleInput">Objetivo</label>';
							html = html + '</div>';
							html = html + '<textarea align="center" class="campo_estrategia2">' + i[0].Objetivos + '</textarea>';
							// html = html + '</div>';
							html = html + '<div>';
							// Agrega div con clase
							html = html + '<div class="containerTitulo2estraMod3">';
							html = html + '<label class="titulo2estraMod3" for="formGroupExampleInput2">Estrategia</label>';
							html = html + '</div>';
							html = html + '</div>';
							//Segundo ciclo 
							html = html + '<div class="containerBtnsModalMod3 btn-group" id="btn_planeem">';
							for (j of i) {
								// console.log("Esta es la j"+j)
								html = html + '<div>';
								//Esta es la llave que llama el modal	
								html = html + '<a data-toggle="modal" style="outline: none;background-color: #238276;border-radius: 50px;color: white !important;margin:12px;padding: 10px 18px;cursor: pointer;float: left;" class="a" data-target="#identificador' + j.id_formulacionEstrategias + '" data-whatever="@fat">*</a>';
								html = html + '</div>';

								//Este es el modal	
								html = html + '	<div class="modal fade" id="identificador' + j.id_formulacionEstrategias + '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
								html = html + '		<div class="modal-dialog" role="document">';
								html = html + '		<div class="modal-content modalMod3">';
								html = html + '			<div class="modal-body" style="padding: 0 !important;">';
								html = html + '				<div class="opciones5">';
								html = html + '					<h5 class="titulo2estraMod3">OBJETIVOS A CORTO PLAZO</h5>';
								html = html + '					<table class="egt" id="tabla">';
								html = html + '						<thead>';
								html = html + '							<tr>';
								html = html + '							 <label for="formGroupExampleInput2" style="text-align: center;font-size: 20px;">Estrategia</label>';
								html = html + '							 <input name="id_Planeacion[]" id="id_Planeacion[]" value="' + j.id_Planeacion + '" hidden>';
								html = html + '							 	<input name="id_formulacionEstrategias[]" id="id_formulacionEstrategias[]" value="' + j.id_formulacionEstrategias + '" hidden>';
								html = html + '								<textarea class="campo_estrategia2">' + j.id_estrategia + '</textarea>';
								html = html + '							</tr>';
								html = html + '							<tr>';
								html = html + '								<th class="thCampo" colspan="1" style="text-align: center;border: none;font-size: 20px;" rowspan="1">Acción</th>';
								html = html + '								<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Presupuesto</th>';
								html = html + '								<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Tiempo de duración</th>';
								html = html + '							<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Responsable</th>';
								html = html + '							</tr>';
								html = html + '						</thead>';
								html = html + '						<tbody>';
								html = html + '							<tr class="formulario">';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="accion[]" id="accion[]" class="campo_estrategiaX" maxlength="100"></textarea>';
								html = html + '								</td>';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="presupuesto[]" id="presupuesto[]" class="campo_estrategiaX" maxlength="100"></textarea>';
								html = html + '								</td>';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="tiempo[]" id="tiempo[]" class="campo_estrategiaX" maxlength="100"></textarea>';
								html = html + '								</td>';
								html = html + '								<td class="radio">';
								html = html + '									<textarea name="responsable[]" id="responsable[]" class="campo_estrategiaX" maxlength="100"></textarea>';
								html = html + '								</td>';
								html = html + '							</tr>';
								html = html + '						</tbody>';
								html = html + '					</table>';
								html = html + '				</div>';
								// Agrega div con clases
								html = html + '<div class="containerBtnsMod3">';
								html = html + '		<a data-dismiss="modal" aria-label="Close" style="color:white;" class="siguienteMod3">Cerrar</a>';
								html = html + '</div>';
								html = html + '		</div>';
								html = html + '		</div>';
								html = html + '		</div>';
								html = html + '</div>';
							}
							// Cierra contenedor de btns
							html = html + '</div>';
							html = html + '</div>';
						}
					}
					$('#div3').append(html);
					//Pinta el contenido en el html
					console.log('Aca Termina');
				} else {
					alert('error');
				}
			},
			"error": function() {
				console.log("error");
			}
		}); //////fin ajax
	}); ////Fin Funtion document
</script>


<script>
	function guardar() {


		if (document.getElementById('Para_paso1').value == 0) {

			document.getElementById("id").innerHTML = "error";

		} else {
			var miDato = document.getElementById('Para_paso1').value;
			localStorage.setItem('Para', miDato);
			localStorage.setItem('Progreso', '10%');
		}
	};
</script>



<script>
	var Progreso = localStorage.getItem('Progreso')
	document.getElementById("id").style.width = Progreso;
	document.getElementById("id").innerHTML = Progreso;
</script>

<script>
	$(document).ready(function() {
		$('.items3 li:nth-child(3)').addClass("acti3");
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
<script>
	$(document).ready(function() {
		var planeacion = localStorage.getItem('id');
		$(".id").val(planeacion);
		console.log(planeacion);
	});
</script>
@endsection