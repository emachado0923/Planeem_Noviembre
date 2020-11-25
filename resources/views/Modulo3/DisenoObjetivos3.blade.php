@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')



	@yield('progres')


</header>


<form method="post" role="from" action="{{route('Objetivos')}}">
	@csrf

	<div>
		<div class="contentParrafo">
			{{-- <p>Aqui viene el parrafo del texto lol.</p> --}}
		</div>

		<div id="campo_texto" class="campoTextoMod3">
			<h3 class="titulo2estraMod3">Objetivos</h3>
			<table>

			</table>
		</div>
		<!-- Cambio de clases  -->
		<div class="listaMod3">
			<h4>Verbos<span value="mas_factores" onclick="mas_factores()" class="icon-circle-down" style=" margin-left: 20%;"></span></h4>
		</div>

		<section id="factores" class="factoresMod3">
			<div id="factor">
				<form class="opciones2">
					<div class="formulario2">
						<div class="respuestas2Mod3">
							<div class="wrap">
								<div class="radio">
									<select id="pro_id" class="form-controlMod3">
										<option selected>Choose...</option>
										@foreach ($Verbos as $Verbos)
										<option value="{{$Verbos['nombre']}}">{{$Verbos->nombre}} </option>
										@endforeach
									</select>
									<input type="text" name="id_planecion" id="id_planecion" value="{{$proyecto}}" style="display:none">

									<br>
									<br>
									<a id="agregarVerbo" onclick="agregarverbo()">Agregar</a>
									<br>
									<br>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- Fin cambio de clases -->
</form>
<div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificadoMod3">
			<div class="modal-body">
				<div class="añadircapacidad">
					<textarea maxlength="504" id="Añadrir" style="color:black;" class="campo4"></textarea>
				</div>

			</div>
			<div class="containerBtnsMod3">
				<a onclick="agregarv()" data-dismiss="modal" aria-label="Close" class="siguienteMod3">Añadir</a>
				<div id="cancelar">
					<a value="cierra_AñadirCapa" class="siguienteMod3" data-dismiss="modal" aria-label="Close" style=" outline: none !important;">Cancelar</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-auto mx-auto mt-auto">
	<div class="infon">
		<a id="boton1" data-toggle="modal" data-target="#exampleModal0" class="button2_agregar5"><span class="icon-folder-plus">
				<div id="hover_agregar1">
					<h5>Agregar</h5>
				</div>
			</span>
		</a>
		{{-- <a id="boton2_eliminar2" onclick="Refrescaverbo2()" class="boton2_eliminar2"><span class="icon-bin"></span><div id="hover_eliminar">
				<h5>Eliminar</h5></div>
			</a> --}}

	</div>
	<br>
	<br>
	<div class="containerBtnsMod3">
		<a href="{{ route('tercero1-2') }}" class="siguienteMod3">Anterior</a>
		<button type="submit" class="siguienteMod3">Siguiente</button>
	</div>
</div>

<span class="icon-info icon-infoMod3" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content modal-contentMod3 ">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
				<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
			</div>
			<div class="modal-body">
				<p class="parrafoInfoMod3">
					A continuación, verá una explicación simple y unos ejemplos de cómo se estructuran los objetivos empresariales a través de la siguiente fórmula: Verbo en infinitivo + sustantivo + adjetivo.
					<br>Ejemplo<br>
					Diversificar el modelo de negocio actual. (Objetivo Estratégico)
					<br>Comercializar los productos de manera online. (Objetivo Táctico)
					<br>Reducir los tiempos de respuesta al cliente. (Objetivo Operacional)
					<br>
					En este espacio encontrará una lista desplegable de algunos verbos en infinitivo ya predeterminados, lo invitamos a seleccionar aquellos con los que usted desee trabajar y completar la construcción de sus objetivos según las indicaciones mencionadas anteriormente (sustantivo + adjetivo). De esta manera quedarán listos sus objetivos empresariales.
					Información de objetivos para la lista desplegable
				</p>
			</div>
		</div>
	</div>
</div>
<label type="text" id="nombre"></label><br>
</div>

</div>
</form>



@yield('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {
		$("#exampleModalScrollable").modal("show");
	});
</script>



<script type="text/javascript">
	function Refrescaverbo2() {
		var ip = [];
		var i = 0;
		$('#guardar').attr('disabled', 'disabled');
		$('.iProduct').each(function(index, element) {
			i++;
			ip.push({
				id_pro: $(this).val()
			});
		});

		if (i > 0) {
			$('#guardar').removeAttr('disabled', 'disabled');
		}
		var ipt = JSON.stringify(ip);
		$('#campo_texto').val(encodeURIComponent(ipt));


		//   Refrescaverbo();//Refresco Productos

		//   $('.remove-item').off().click(function(e) {
		// 	  $(this).parent('td').parent('tr').remove(); 
		// 	  if ($('#campo_texto tr.item').length == 0)
		// 		  $('#campo_texto .no-item').slideDown(300);
		// 	  Refrescaverbo();
		//   });
		//  $('.iProduct').off().change(function(e) {
		// 	  Refrescaverbo();
		//  });
	}


	var contador = 0;

	$(document).ready(function() {
		var id = localStorage.getItem('id');
		$.ajax({
			url: "/posicion/" + id,
			type: 'get',
			success: function(posiciones) {
				console.log(posiciones);

				for (a of posiciones) {


					if (a.posiciones > 0) {
						contador = parseInt(a.posiciones)
					} else {
						contador = 0
					}


				}


			},
			error: function() {
				console.log("error");
			}
		});
	});
	//fin ajax

	function agregarverbo() {

		let contador1 = contador += 1;

		var nombre = $('#pro_id').find(':selected').val();

		var text = $('#pro_id').find(':selected').text();


		var sptext = text.split();

		var newtr = '<div class="input-group mb-3" id="' + contador1 + '">';
		newtr = newtr + '<div class="input-group-prepend">';
		newtr = newtr + '<span class="input-group-text" id="basic-addon1">*</span>';
		newtr = newtr + '</div>';
		newtr = newtr + '<input type="text" style="display:none" name="posiciones[]" value="' + contador1 + '" >'

		newtr = newtr + '<input type="text" value ="' + nombre + '" name="Objetivos[]" class="form-control" id="inputObjetivo" maxlength="199" placeholder="Objetivo" aria-label="Objetivo" aria-describedby="basic-addon1">';

		newtr = newtr + '</div>';


		$('#campo_texto').append(newtr); //Pinta el contenido en el html


	}
</script>

<script>
	id_planecion = localStorage.getItem('id');

	$('#id_planecion').val(id_planecion);

	console.log(id_planecion);
</script>

<script type="text/javascript">
	//   function Refrescaverbo2(){
	// 	  var ip = [];
	// 	  var i = 0;
	// 	  $('#guardar').attr('disabled','disabled'); 
	// 	  $('.iProduct').each(function(index, element) {
	// 		  i++;
	// 		  ip.push({ id_pro : $(this).val() });
	// 	  });
	// 	  if (i > 0) {
	// 		  $('#guardar').removeAttr('disabled','disabled');
	// 	  }
	// 	  var ipt=JSON.stringify(ip);
	// 	  $('#ListaPro').val(encodeURIComponent(ipt));
	//   }

	function contadorMenos(contador1) {
		return contador1 -= 1;
	}

	var contador = 0;

	function agregarv() {


		let contador1 = contador += 1;


		var nombre = $('#Añadrir').val();

		var text = $('#Añadrir').text();



		var sptext = text.split();

		var html = '<div class="input-group mb-3" id="' + contador1 + '">';
		html = html + '<div class="input-group-prepend">';
		html = html + '<span class="input-group-text" id="basic-addon1">*</span>';
		html = html + '</div>';
		html = html + '<input type="text" style="display:none" name="posiciones[]" value="' + contador1 + '" >'
		html = html + '<input type="text" value ="' + nombre + '" name="Objetivos[]" class="form-control" id="inputObjetivo" maxlength="199" placeholder="Objetivo" aria-label="Objetivo" aria-describedby="basic-addon1">';
		//html = html + '<a id="boton2_eliminar2" onclick="EV('+contador1+');" class="boton2_eliminar2"><span class="icon-bin"></span><div id="hover_eliminar"><h5>Eliminar</h5></div></a>';

		// html = html + '<span></span><div id="hover_eliminar"></div></a>';

		html = html + '</div>';


		$('#campo_texto').append(html); //Pinta el contenido en el html


	}
</script>





<script type="text/javascript">
	//Este método, crea un campo oculto, con el cual, obtenemos las posiciones del verbo 
	$(document).ready(function() {
		var Verbo = $(".text").val();
		var maxField = 10;
		var addButton = $('.pro_id');
		var campo_texto = $('.campo_texto');
		var fieldHTML = '<div><input type="text" name="Objetivos[] value="' + Verbo + '"' + '/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="remove-icon.png"/></a></div>'; //New input field html
		var x = 1;
		$(addButton).click(function() {
			if (x < maxField) {
				x++;
				$(campo_texto).append(fieldHTML); //Pinta el contenido en el html
			}
		});
		$(campo_texto).on('click', '.remove_button', function(e) {
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
		});
	});
</script>




{{-- ajax --}}

<script>
	//Con este método listamos todos los verbos seleccionados 

	//inicio método
	//En este método, estamos pintado los valores en la vista HTML  
	$(document).ready(function() {
		var id = localStorage.getItem('id');
		////Inicio ajax
		$.ajax({
			url: "/vervoslis/" + id,
			type: 'get',
			success: function(data) {
				console.log(data);

				// Se realiza una  validación, que se encarga de verificar , si los datos  arrojados por el controlador, son diferentes a nulo 
				if (data != null) {
					//En este Fro, se esta recorriendo, los valores arrojados del controlador, Para  pintarlos en la vistas 
					for (i of data) {


						var html = '<div class="input-group mb-3" id="' + i.posiciones + '">';
						html = html + '<div class="input-group-prepend">';
						html = html + '<span class="input-group-text" id="basic-addon1">*</span>';
						html = html + '</div>';
						html = html + '<input type="text" style="display:none" name="posiciones[]" value="' + i.posiciones + '" >';
						html = html + '<input type="text" value ="' + i.Objetivos + '" name="Objetivos[]" class="form-control" id="inputObjetivo" maxlength="199" placeholder="Objetivo" aria-label="Objetivo" aria-describedby="basic-addon1">';
						// html = html + '<a id="boton2_eliminar2" onclick="EV('+i.posiciones+')" class="boton2_eliminar2"><span class="icon-bin"></span><div id="hover_eliminar"><h5>Eliminar</h5></div></a>';
						html = html + '</div>';

						$('#campo_texto').append(html); //Pinta el contenido en el html
						console.log(i.id_verbos);
					}
				}
			},
			error: function() {
				console.log("error");
			}
		});
		//////fin ajax
	});
	//fin método
</script>


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
	});


	function EV(id) {
		$('#' + id).remove();



		// $.ajax({
		// 	url: '/EV/'+id,
		// 	type: 'DELETE',
		// 	success: function(result) {
		// 	//  alert("result"+result);
		// 	}
		// });
	}
</script>
{{-- <script>
https://www.facebook.com/Southparklatinohd/videos/1465972093583738/

</script> --}}













@endsection