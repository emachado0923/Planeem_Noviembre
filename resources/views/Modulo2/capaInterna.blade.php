@extends('layouts.nav2')
@section('content')
<header>

	@yield('js')
	@section('f')
	
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	
	@yield('progres')
	<div>
            <div class="progress">
            <div id="por" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
            </div>
	</div>
	<link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
    <script src=" {{asset('js/toastr.js')}}"></script>
</header>
<section class="contenedorper5">
<span class="icon-info icon-infoMod3" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>

	<form  action="{{ route('guardaCapa'),auth()->user()->selected_planne }}" method="POST" id="form" name="form" role="form">
		<input type="hidden" name="idPlaneacion"  value=""  id="" class="idPlaneacion" >

		@csrf
		<div id="regiration_form">
			<fieldset class="opciones">
				<h3>Capacidad Directiva:</h3>
				<p class="parrafotabla">
				Comprende el análisis de aquellas fortalezas o debilidades que se relacionan con
				los procesos administrativos de la empresa, es decir, las funciones de planeación,
				organización, dirección, toma de decisiones, coordinación, comunicación y control.
				</p>
				<table class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center;border:none;" rowspan="2" ></th>
						</tr>
						<tr>
							
							
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button3"  data-toggle="modal" data-target="#debilidad" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam1-1"></span>
							</a> Debilidad</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button4"  data-toggle="modal" data-target="#fortaleza" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam1-1"></span>
							</a>Fortaleza</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button5"  data-toggle="modal" data-target="#noaplica" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam1-1"></span>
							</a>No Aplica</th>
						</tr>
					</thead>

					<tbody >
						@foreach ($directiva as $direc)

						<tr class="formulario">

							<td colspan="2" data-column_name="nombre" data-id="{{$direc->id}}" data-name="{{$direc->nombre}}" id="tdFormulario" class="thCampo1" >{{$direc->nombre}}</td>
							<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
							<!-- correcion2-1 -->
							<td   class="radio espacioformulario1">		
								<input type="hidden" name="preguntas[]" id="gender" value="{{ $direc->id}}">
								<input type="hidden" name="Nombre_Capacidad[]" id="gender" value="{{ $direc->nombre}}">


								<input  type="radio" name="{{$direc->id}}" id="debilidad-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="dAlta" required>
								<label  for="debilidad-{{$direc->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input  type="radio" name="{{$direc->id}}" id="debilidadb-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="dMedia" required>
								<label  for="debilidadb-{{$direc->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input  type="radio" name="{{$direc->id}}" id="debilidadc-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="dBaja" required>
								<label  for="debilidadc-{{$direc->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio espacioformulario1">
								<input  type="radio" name="{{$direc->id}}" id="fortaleza1-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="fAlta" required>
								<label  for="fortaleza1-{{$direc->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input  type="radio" name="{{$direc->id}}" id="fortaleza2-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="fMedia" required>
								<label  for="fortaleza2-{{$direc->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input  type="radio" name="{{$direc->id}}" id="fortaleza3-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="fBaja" required>
								<label for="fortaleza3-{{$direc->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input  type="radio" name="{{$direc->id}}" id="noaplica-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="NA" required>
								<label  for="noaplica-{{$direc->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>
										{{-- ////Posible error --}}
							{{-- <input type="hidden" name="respuesta[]"  value="{{$direc->id}}"> --}}
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" id="boton" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right btnRightMod3">Continuar</button>
			</fieldset>
			<fieldset class="opciones">
				<h3>Capacidad Competitiva:</h3>
				<p class="parrafotabla">Involucra todos los aspectos de las debilidades y fortalezas relacionadas con el área comercial, como calidad del producto, exclusividad, portafolio de productos, participación en el mercado, canales de distribución, cubrimiento, investigación y desarrollo, precios, publicidad, lealtad de los clientes, calidad en el servicio al cliente, precios y bonificaciones.</p>
				<table  class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center;border:none;" rowspan="2" ></th>
						</tr>
						<tr>
							<!--examplemodal5->debilidad 6->fortaleza 7->noaplica-->
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button3"  data-toggle="modal" data-target="#debilidad" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam2-1"></span>
							</a> Debilidad</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button4"  data-toggle="modal" data-target="#fortaleza" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam2-1"></span>
							</a>Fortaleza</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button5"  data-toggle="modal" data-target="#noaplica" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam2-1"></span>
							</a>No Aplica</th>
						</tr>
					</thead>

					<!--examplemodal5->debilidad 6->fortaleza 7->noaplica-->
					<tbody>
						@foreach ($competitiva as $compe)

						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$compe->id}}" data-name="{{$compe->nombre}}" id="tdFormulario" class="thCampo1" >{{$compe->nombre}}</td>
							<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
							<td   class="radio espacioformulario1">
								<input type="hidden" name="preguntas[]"id="gender" value="{{ $compe->id }}">
								<input type="hidden" name="Nombre_Capacidad[]" id="gender" value="{{ $compe->nombre}}">

								<input type="radio" name="{{$compe->id}}" id="debilidad-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="dAlta">
								<label for="debilidad-{{$compe->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$compe->id}}" id="debilidadb-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="dMedia">
								<label for="debilidadb-{{$compe->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$compe->id}}" id="debilidadc-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="dBaja">
								<label for="debilidadc-{{$compe->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio espacioformulario1">
								<input type="radio" name="{{$compe->id}}" id="fortaleza1-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="fAlta">
								<label for="fortaleza1-{{$compe->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$compe->id}}" id="fortaleza2-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="fMedia">
								<label for="fortaleza2-{{$compe->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$compe->id}}" id="fortaleza3-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="fBaja">
								<label for="fortaleza3-{{$compe->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$compe->id}}" id="noaplica-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$compe->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="Ahora2 previous btn btn-default btnLeftMod3">Anterior</button>
				<button type="button" class="next1 Ahora3 btn btn-planeem btnRightMod3">Continuar</button>
			</fieldset>
			<fieldset class="opciones">
				<h3>Capacidad Financiera:</h3>
				<p class="parrafotabla">En este componente se incluyen algunos aspectos relacionados con 
				las fortalezas o debilidades financieras de la empresa como: deuda o capital, disponibilidad 
				de línea de crédito, capacidad de endeudamiento, margen financiero, rentabilidad, liquidez, 
				rotación de cartera, rotación de inventarios, estabilidad de costos, elasticidad de la demanda 
				y otros índices financieros que se consideren pertinentes para la empresa y el área de análisis.</p>
				<table  class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center;border:none;" rowspan="2" ></th>
						</tr>
						<tr>
							
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button3"  data-toggle="modal" data-target="#debilidad" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam3-1"></span>
							</a> Debilidad</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button4"  data-toggle="modal" data-target="#fortaleza" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam3-1"></span>
							</a>Fortaleza</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button5"  data-toggle="modal" data-target="#noaplica" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam3-1"></span>
							</a>No Aplica</th>
						</tr>
					</thead>
					<tbody>
						<tr class="formulario">

							@foreach ($financiera as $fina)

							<tr class="formulario">
								<td colspan="2" data-column_name="nombre" data-id="{{$fina->id}}" data-name="{{$fina->nombre}}" id="tdFormulario" class="thCampo1" >{{$fina->nombre}}</td>
								<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
								<td   class="radio espacioformulario1">
									<input type="hidden"	id="gender" name="preguntas[]" value="{{ $fina->id }}">
									<input type="hidden" name="Nombre_Capacidad[]" id="gender" value="{{ $fina->nombre}}">

									<input type="radio" name="{{$fina->id}}" id="debilidad-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="dAlta">
									<label for="debilidad-{{$fina->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$fina->id}}" id="debilidadb-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="dMedia">
									<label for="debilidadb-{{$fina->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$fina->id}}" id="debilidadc-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="dBaja">
									<label for="debilidadc-{{$fina->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio espacioformulario1">
									<input type="radio" name="{{$fina->id}}" id="fortaleza1-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="fAlta">
									<label for="fortaleza1-{{$fina->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$fina->id}}" id="fortaleza2-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="fMedia">
									<label for="fortaleza2-{{$fina->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$fina->id}}" id="fortaleza3-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="fBaja">
									<label for="fortaleza3-{{$fina->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio">
									<input type="radio" name="{{$fina->id}}" id="noaplica-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="NA">
									<label for="noaplica-{{$fina->id. "-" .auth()->user()->selected_planne}}">N</label>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<button type="button" class="Ahora2 previous btn btn-default btnLeftMod3">Anterior</button>
					<button type="button" class="next2 Ahora3 btn btn-planeem btnRightMod3">Continuar</button>
				</fieldset>

				<fieldset class="opciones">
					<h3>Capacidad Tecnológica:</h3>
					<p class="parrafotabla">En este componente se incluyen todos los aspectos relacionados con el proceso de producción, 
					infraestructura y los procesos en las empresas industriales y de servicio. Por tanto, involucra, 
					entre otras: infraestructura tecnológica (hardware), exclusividad de los procesos de producción, 
					automatización de los procesos, ubicación física, acceso a servicios públicos, intensidad en el uso 
					de mano de obra, patentes, nivel tecnológico, flexibilidad en la producción, disponibilidad de 
					software, procedimientos administrativos.</p>
					<table  class="egt" id="tabla">
						<thead>
							<tr>
								<th class="thCampo" colspan="2" style="text-align: center;border:none;" rowspan="2" ></th>
							</tr>
							<tr>
								<th style="border: none !important;"></th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button3"  data-toggle="modal" data-target="#debilidad" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam4-1"></span>
								</a> Debilidad</th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button4"  data-toggle="modal" data-target="#fortaleza" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam4-1"></span>
								</a>Fortaleza</th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button5"  data-toggle="modal" data-target="#noaplica" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam4-1"></span>
								</a>No Aplica</th>
							</tr>
						</thead>

						<tbody>

						
							@foreach ($tecnologica as $tec)	
							<tr class="formulario">
								<td colspan="2" data-column_name="nombre" data-id="{{$tec->id}}" data-name="{{$tec->nombre}}" id="tdFormulario" class="thCampo1" >{{$tec->nombre}}</td>
								<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
								<td   class="radio espacioformulario1">
									<input type="hidden"id="gender"  name="preguntas[]" value="{{ $tec->id }}">
									<input type="hidden" name="Nombre_Capacidad[]" id="gender" value="{{ $tec->nombre}}">

									<input type="radio" name="{{$tec->id}}" id="debilidad-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="dAlta">
									<label for="debilidad-{{$tec->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$tec->id}}" id="debilidadb-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="dMedia">
									<label for="debilidadb-{{$tec->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$tec->id}}" id="debilidadc-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="dBaja">
									<label for="debilidadc-{{$tec->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio espacioformulario1">
									<input type="radio" name="{{$tec->id}}" id="fortaleza1-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="fAlta">
									<label for="fortaleza1-{{$tec->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$tec->id}}" id="fortaleza2-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="fMedia">
									<label for="fortaleza2-{{$tec->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$tec->id}}" id="fortaleza3-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="fBaja">
									<label for="fortaleza3-{{$tec->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio">
									<input type="radio" name="{{$tec->id}}" id="noaplica-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="NA">
									<label for="noaplica-{{$tec->id. "-" .auth()->user()->selected_planne}}">N</label>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<button type="button" class="Ahora2 previous btn btn-default btnLeftMod3">Anterior</button>

					<button type="button" class="next3 Ahora3 btn btn-planeem btnRightMod3">Continuar</button>
				</fieldset>
				<fieldset class="opciones">
					<h3>Capacidad de Factor Humano:</h3>
					<p class="parrafotabla">En este componente se incluyen todas las fortalezas y 
					debilidades relacionadas con el recurso humano de la empresa como el nivel académico,
					 experiencia técnica, estabilidad, rotación, ausentismo, nivel de remuneración, 
					 capacitación, programas de desarrollo, motivación, pertenencia.</p>
					<table  class="egt" id="tabla">
						<thead>
							<tr>
								<th class="thCampo" colspan="2" style="text-align: center;border:none;" rowspan="2" ></th>
							</tr>
							<tr>
								<th style="border: none !important;"></th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button3"  data-toggle="modal" data-target="#debilidad" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam2-1"></span>
								</a> Debilidad</th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button4"  data-toggle="modal" data-target="#fortaleza" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam2-1"></span>
								</a>Fortaleza</th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button5"  data-toggle="modal" data-target="#noaplica" data-whatever="@fat"><span class="icon-info icon-info1-1 icono-spam2-1"></span>
								</a>No Aplica</th>							</tr>
						</thead>
						<tbody>
							<tr class="formulario">
								@foreach ($humano as $huma)

								<tr class="formulario">
									<td colspan="2" data-column_name="nombre" data-id="{{$huma->id}}" data-name="{{$huma->nombre}}" id="tdFormulario" class="thCampo1" >{{$huma->nombre}}</td>
									<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
									<td   class="radio espacioformulario1">
										<input type="hidden"id="gender" name="preguntas[]" value="{{ $huma->id }}">
										<input type="hidden" name="Nombre_Capacidad[]" id="gender" value="{{ $huma->nombre}}">

										<input type="radio" name="{{$huma->id}}" id="debilidad-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="dAlta">
										<label for="debilidad-{{$huma->id. "-" .auth()->user()->selected_planne}}">A</label>

										<input type="radio" name="{{$huma->id}}" id="debilidadb-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="dMedia">
										<label for="debilidadb-{{$huma->id. "-" .auth()->user()->selected_planne}}">M</label>

										<input type="radio" name="{{$huma->id}}" id="debilidadc-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="dBaja">
										<label for="debilidadc-{{$huma->id. "-" .auth()->user()->selected_planne}}">B</label>
									</td>
									<td class="radio espacioformulario1">
										<input type="radio" name="{{$huma->id}}" id="fortaleza1-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="fAlta">
										<label for="fortaleza1-{{$huma->id. "-" .auth()->user()->selected_planne}}">A</label>

										<input type="radio" name="{{$huma->id}}" id="fortaleza2-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="fMedia">
										<label for="fortaleza2-{{$huma->id. "-" .auth()->user()->selected_planne}}">M</label>

										<input type="radio" name="{{$huma->id}}" id="fortaleza3-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="fBaja">
										<label for="fortaleza3-{{$huma->id. "-" .auth()->user()->selected_planne}}">B</label>
									</td>
									<td class="radio">
										<input type="radio" name="{{$huma->id}}" id="noaplica-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="NA">
										<label for="noaplica-{{$huma->id. "-" .auth()->user()->selected_planne}}">N</label>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>

						<button type="button" class="Ahora2 previous btn btn-default btnLeftMod3">Anterior</button>
						<button type="button" id="submitButton" onclick="Save()" class="Ahora3 btn btn-planeem btnRightMod3">Guardar</button>
					</fieldset>
				</div>
				<!-- Botonoes que no se van a utilizar jajajaja -->
				{{-- <div class="infon">
					<a  id="boton1" data-toggle="modal" data-target="#exampleModal21" class="button2_agregar1" ><span class="icon-folder-plus"><div id="hover_agregar1">
						<h5>Agregar</h5></div></span></a>
						<a  class="button2" data-toggle="modal" data-target="#exampleModal7" data-whatever="@mdo"><span class="icon-info "></span>
						</a>
					</div> --}}

				</section>
				

			</form>

		<div class="modal fade" id="debilidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-modificado1">
					<div class="modal-body">
						<div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p class="Nota" style="font-weight: bold; font-size: 15px"; >Debilidades:</p>
							
							<p>
								Son aquellos factores internos que generan una posición
								desfavorable frente a la competencia, por ejemplo, recursos y habilidades
								de las que carece o actividades que no se desarrollan de la mejor manera
								en la organización.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="fortaleza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-modificado1">
					<div class="modal-body">
						<div id="cierre_caja6"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p class="Nota" style="font-weight: bold; font-size: 15px"; >Fortaleza:</p>
						
							<p>
								Son las capacidades esenciales con las que cuenta la compañía,
								que le permiten obtener una posición privilegiada frente a la
								competencia, por ejemplo, recursos y habilidades que se poseen
								o actividades que se desarrollan de forma adecuada.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="noaplica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-modificado1">
					<div class="modal-body">
						<div id="cierra_caja5"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p class="Nota" style="font-weight: bold; font-size: 15px";>No Aplica:</p>
							
							<p>
								Es este ítem es para indicar que no es ni una debilidad ni
								fortaleza o simplemente un factor que no se relaciona con las
								actividades que realiza la empresa.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle" style="font-weight: bold;">Desarrollo de la Matriz de Capacidad Interna:</h5>
						<span class="icon-cancel-circle" style="color:#FC7323; font-size: 25px; cursor: pointer; margin-top: 4px;
						margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
		
					</div>
					<div class="modal-body">
					<p><br>
						Para realizar la Matriz de Capacidad Interna es fundamental realizar los siguientes pasos:<br>
							
						<br>1) se identifica si los factores mencionados representan para su empresa una debilidad o fortaleza
						<br>2) Después se debe asignar una calificación a cada factor considerando su importancia 
						de la siguiente manera: <br>
							A (si es alto).<br>
							M (si es medio).<br>
							B (si es bajo).<br>
							En caso de no aplicar se puede marcar la opción N/A 

						<br><br>¡Empecemos!</p>
					</div>
				</div>
			</div>
		</div>

		</section>
		@yield('script')
		@endsection
		@push('script')

	<!--	<script>
	$(document).ready(function()
		{
		$("#boton").click(function () {	 
			if( $("#form input[name='1']:radio").is(':checked') && $("#form input[name='2']:radio").is(':checked'))  {  
				alert("Bien!!!");
				$("#formulario").submit();  
				} else{  
					alert("Selecciona la edad por favor!!!");  
					}  
		});
	 });

		</script>-->

		<script>
			$(document).ready(function(){
				var planeacion = localStorage.getItem('id');
				$(".idPlaneacion").val(planeacion);
				console.log(planeacion);
			});

		</script>
		<script>

			$(document).ready(function () {
				$('.items li:first-child').addClass("acti");
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

@jquery
@toastr_js
@toastr_render

		<script>

			$( document ).ready(function() {
				var id = localStorage.getItem('id');
				$.ajax({
					url:"/capacidadInte/show/"+id,
					type:'get',
					success:function(data){
						console.log(data);


						if(data != null){
							for(i of data){

								if(i.idRespuesta == 'dAlta'){
									$('#debilidad-'+i.capacidad+"-"+id).prop('checked',true);
								}else if(i.idRespuesta == 'dMedia'){
									$('#debilidadb-'+i.capacidad+"-"+id).prop('checked',true);
								}else if(i.idRespuesta == 'dBaja'){
									$('#debilidadc-'+i.capacidad+"-"+id).prop('checked',true);
								}else if(i.idRespuesta == 'fAlta'){
									$('#fortaleza1-'+i.capacidad+"-"+id).prop('checked',true);
								}else if (i.idRespuesta == 'fMedia'){
									$('#fortaleza2-'+i.capacidad+"-"+id).prop('checked',true);
								}else if(i.idRespuesta == 'fBaja'){
									$('#fortaleza2-'+i.capacidad+"-"+id).prop('checked',true);
								}else if(i.idRespuesta == 'NA'){
									$('#noaplica-'+i.capacidad+"-"+id).prop('checked',true);
								}

							}
						}
					},
					error:function(){
						console.log("error");
					}
				});
			});

		



		</script>
	<script>
	$(document).ready(function(){
		$("#por").css("width","20%");
		//var current = 1,current_step,next_step;
		steps = $("fieldset").length;
		$(".next").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().next();
			if($("#form input[name='1']:radio").is(':checked') && $("#form input[name='2']:radio").is(':checked') &&
			$("#form input[name='3']:radio").is(':checked') && $("#form input[name='4']:radio").is(':checked') &&
			$("#form input[name='5']:radio").is(':checked') && $("#form input[name='6']:radio").is(':checked') &&
			$("#form input[name='7']:radio").is(':checked') && $("#form input[name='8']:radio").is(':checked') &&
			$("#form input[name='9']:radio").is(':checked') && $("#form input[name='10']:radio").is(':checked')
			)  {  
				toastr.success("Has seleccionado todos los campos correctamente")
			next_step.show();
			current_step.hide();
			$("#por").css("width","40%");
			//setProgressBar(++current);
				$("#formulario").submit();  
				} else{  
					toastr.error('Recuerda que los campos son obligatorios, vuelve al anterior punto y asegurate de seleccionarlos correctamente','¡Hola!');
				// hola, faltaron algunos campos por seleccionar, vuelve al punto anterior y asegurate de seleccionarlos todos correctamente.
				} 
		});
		$(".previous").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().prev();
			next_step.show();
			current_step.hide();
			setProgressBar(--current);
		});
	//	setProgressBar(current);
  // Change progress bar action
 // function setProgressBar(curStep){
 // 	var percent = parseFloat(100 / steps) * curStep;
  //	percent = percent.toFixed();
  //	$(".progress-bar")
  //	.css("width",percent+"%");
 // }
});
</script>
<script>
	$(document).ready(function(){

		//var current = 1,current_step,next_step;
		steps = $("fieldset").length;
		$(".next1").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().next();
			if($("#form input[name='11']:radio").is(':checked') && $("#form input[name='12']:radio").is(':checked')&&
			$("#form input[name='13']:radio").is(':checked') && $("#form input[name='14']:radio").is(':checked') &&
			$("#form input[name='15']:radio").is(':checked') && $("#form input[name='16']:radio").is(':checked') &&
			$("#form input[name='17']:radio").is(':checked') && $("#form input[name='18']:radio").is(':checked') &&
			$("#form input[name='19']:radio").is(':checked') && $("#form input[name='20']:radio").is(':checked'))  {  
				toastr.success("Has seleccionado todos los campos correctamente")
			next_step.show();
			current_step.hide();
			$("#por").css("width","60%");
			//setProgressBar(++current);
				$("#formulario").submit();  
				} else{  
					toastr.error('Recuerda que todos los campos son obligatorios!', '¡Hola!'); } 
		});
		
	//	setProgressBar(current);
  // Change progress bar action
 // function setProgressBar(curStep){
 // 	var percent = parseFloat(100 / steps) * curStep;
  //	percent = percent.toFixed();
  //	$(".progress-bar")
  //	.css("width",percent+"%");
 // }
});
</script>

<script>
	$(document).ready(function(){

		//var current = 1,current_step,next_step;
		steps = $("fieldset").length;
		$(".next2").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().next();
			if($("#form input[name='21']:radio").is(':checked') && $("#form input[name='22']:radio").is(':checked') &&
			$("#form input[name='23']:radio").is(':checked') && $("#form input[name='24']:radio").is(':checked') &&
			$("#form input[name='25']:radio").is(':checked') && $("#form input[name='26']:radio").is(':checked') &&
			$("#form input[name='27']:radio").is(':checked') && $("#form input[name='28']:radio").is(':checked') &&
			$("#form input[name='29']:radio").is(':checked') && $("#form input[name='30']:radio").is(':checked'))  {  
				toastr.success("Has seleccionado todos los campos correctamente")
			next_step.show();
			current_step.hide();
			$("#por").css("width","80%");
			//setProgressBar(++current);
				$("#formulario").submit();  
				} else{  
					toastr.error('Recuerda que todos los campos son obligatorios!', '¡Hola!'); } 
		});
		
	//	setProgressBar(current);
  // Change progress bar action
 // function setProgressBar(curStep){
 // 	var percent = parseFloat(100 / steps) * curStep;
  //	percent = percent.toFixed();
  //	$(".progress-bar")
  //	.css("width",percent+"%");
 // }
});
</script>
<script>
	$(document).ready(function(){

		//var current = 1,current_step,next_step;
		steps = $("fieldset").length;
		$(".next3").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().next();
			if($("#form input[name='31']:radio").is(':checked') && $("#form input[name='32']:radio").is(':checked')&&
			$("#form input[name='33']:radio").is(':checked') && $("#form input[name='34']:radio").is(':checked') &&
			$("#form input[name='35']:radio").is(':checked') && $("#form input[name='36']:radio").is(':checked') &&
			$("#form input[name='37']:radio").is(':checked') && $("#form input[name='38']:radio").is(':checked') &&
			$("#form input[name='39']:radio").is(':checked') && $("#form input[name='40']:radio").is(':checked'))  {  
				toastr.success("Has seleccionado todos los campos correctamente")
			next_step.show();
			current_step.hide();
			$("#por").css("width","100%");
			//setProgressBar(++current);
				$("#formulario").submit();  
				} else{  
					toastr.error('Recuerda que todos los campos son obligatorios!', '¡Hola!'); } 
		});
		
	//	setProgressBar(current);
  // Change progress bar action
 // function setProgressBar(curStep){
 // 	var percent = parseFloat(100 / steps) * curStep;
  //	percent = percent.toFixed();
  //	$(".progress-bar")
  //	.css("width",percent+"%");
 // }
});
</script>

<script>
function Save(){
if($("#form input[name='41']:radio").is(':checked') && $("#form input[name='42']:radio").is(':checked')&&
			$("#form input[name='43']:radio").is(':checked') && $("#form input[name='44']:radio").is(':checked') &&
			$("#form input[name='45']:radio").is(':checked') && $("#form input[name='46']:radio").is(':checked') &&
			$("#form input[name='47']:radio").is(':checked') && $("#form input[name='48']:radio").is(':checked') &&
			$("#form input[name='49']:radio").is(':checked') && $("#form input[name='50']:radio").is(':checked')){

	toastr.success("Has seleccionado todos los campos correctamente")
	var elemento = document.querySelector('#submitButton');

    elemento.setAttribute("type", "submit");
	
}else{toastr.error('Recuerda que todos los campos son obligatorios!', '¡Hola!');}

}

</script>





@endpush


