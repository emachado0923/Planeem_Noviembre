@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection

	<div class="progress">
            <div id="por" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
            </div>
</header>
<section class="contenedorper3">
	<form id="form" action="{{ route('guardaAna'),auth()->user()->selected_planne }}" method="POST" role="form">
		<input type="hidden" name="idPlaneacion" id="" class="idPlaneacion">
		@csrf
		<div id="regiration_form">
			<fieldset class="opciones3">
				<table class="egt" id="tabla">
					<thead>
						<tr>

							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#politico"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Análisis Político</th>

						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#oportunidad1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Amenaza</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#amenaza1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Oportunidad</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>No aplica</th>
						</tr>
					</thead>
					<tbody>

						@foreach ($politico as $poli)

						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$poli->id}}" data-name="{{$poli->nombre}}" style="text-align: center;" class="thCampo1" id="tdFormulario">{{$poli->nombre}}</td>
							<td>
								<h5 style="color: #238276; font-weight: bold;">Es una</h5>
							</td>
							<!-- correcion2-1 -->
							<td class="radio espacioformulario1">
								<input type="hidden" id="gender" name="preguntas[]" value="{{ $poli->id}}">

								<input type="radio" name="{{$poli->id}}" id="debilidad-{{$poli->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
								<label for="debilidad-{{$poli->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$poli->id}}" id="debilidadb-{{$poli->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
								<label for="debilidadb-{{$poli->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$poli->id}}" id="debilidadc-{{$poli->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
								<label for="debilidadc-{{$poli->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio espacioformulario1">
								<input type="radio" name="{{$poli->id}}" id="oportunidad1-{{$poli->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
								<label for="oportunidad1-{{$poli->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$poli->id}}" id="oportunidad2-{{$poli->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
								<label for="oportunidad2-{{$poli->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$poli->id}}" id="oportunidad3-{{$poli->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
								<label for="oportunidad3-{{$poli->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$poli->id}}" id="noaplica-{{$poli->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$poli->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>

							<input type="hidden" name="respuesta[]" value="{{$poli->id}}">
						</tr>
						@endforeach
					</tbody>
				</table>
					<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones3">
				<table class="egt" id="tabla">
					<thead>
						<tr>

							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#economico"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Análisis Económico </th>

						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#oportunidad1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Amenaza</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#amenaza1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Oportunidad</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>No aplica</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($economico as $econo)

						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$econo->id}}" data-name="{{$econo->nombre}}" style="text-align: center;" class="thCampo1" id="tdFormulario">{{$econo->nombre}}</td>
							<td>
								<h5 style="color: #238276; font-weight: bold;">Es una</h5>
							</td>
							<td class="radio espacioformulario1">
								<input type="hidden" id="gender" name="preguntas[]" value="{{ $econo->id}}">

								<input type="radio" name="{{$econo->id}}" id="debilidad-{{$econo->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
								<label for="debilidad-{{$econo->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$econo->id}}" id="debilidadb-{{$econo->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
								<label for="debilidadb-{{$econo->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$econo->id}}" id="debilidadc-{{$econo->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
								<label for="debilidadc-{{$econo->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio espacioformulario1">
								<input type="radio" name="{{$econo->id}}" id="oportunidad1-{{$econo->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
								<label for="oportunidad1-{{$econo->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$econo->id}}" id="oportunidad2-{{$econo->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
								<label for="oportunidad2-{{$econo->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$econo->id}}" id="oportunidad3-{{$econo->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
								<label for="oportunidad3-{{$econo->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$econo->id}}" id="noaplica-{{$econo->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$econo->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>

							<input type="hidden" name="respuesta[]" value="{{$econo->id}}">
						</tr>
						@endforeach
					</tbody>
				</table>
				
				<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
				<button type="button" class="next1 btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones3">
				<table class="egt" id="tabla">
					<thead>
						<tr>

							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#social"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Análisis Social</th>

						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#oportunidad1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Amenaza</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#amenaza1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Oportunidad</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>No aplica</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($social as $soc)

						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$soc->id}}" data-name="{{$soc->nombre}}" style="text-align: center;" class="thCampo1" id="tdFormulario">{{$soc->nombre}}</td>
							<td>
								<h5 style="color: #238276; font-weight: bold;">Es una</h5>
							</td>
							<td class="radio espacioformulario1">
								<input type="hidden" name="preguntas[]" value="{{ $soc->id}}">

								<input type="radio" name="{{$soc->id}}" id="debilidad-{{$soc->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
								<label for="debilidad-{{$soc->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$soc->id}}" id="debilidadb-{{$soc->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
								<label for="debilidadb-{{$soc->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$soc->id}}" id="debilidadc-{{$soc->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
								<label for="debilidadc-{{$soc->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio espacioformulario1">
								<input type="radio" name="{{$soc->id}}" id="oportunidad1-{{$soc->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
								<label for="oportunidad1-{{$soc->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$soc->id}}" id="oportunidad2-{{$soc->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
								<label for="oportunidad2-{{$soc->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$soc->id}}" id="oportunidad3-{{$soc->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
								<label for="oportunidad3-{{$soc->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$soc->id}}" id="noaplica-{{$soc->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$soc->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>

							<input type="hidden" name="respuesta[]" value="{{$soc->id}}">
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
				<button type="button" class="next2 btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones3">
				<table class="egt" id="tabla">
					<thead>
						<tr>

							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#tecnologico"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Análisis Tecnológico</th>

						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#oportunidad1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Amenaza</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#amenaza1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Oportunidad</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>No aplica</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($tecnologico as $tec)
						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$tec->id}}" data-name="{{$tec->nombre}}" style="text-align: center;" class="thCampo1" id="tdFormulario">{{$tec->nombre}}</td>
							<td>
								<h5 style="color: #238276; font-weight: bold;">Es una</h5>
							</td>
							<td class="radio espacioformulario1">
								<input type="hidden" id="gender" name="preguntas[]" value="{{$tec->id}}">

								<input type="radio" name="{{$tec->id}}" id="debilidad-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
								<label for="debilidad-{{$tec->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$tec->id}}" id="debilidadb-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
								<label for="debilidadb-{{$tec->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$tec->id}}" id="debilidadc-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
								<label for="debilidadc-{{$tec->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio espacioformulario1">
								<input type="radio" name="{{$tec->id}}" id="oportunidad1-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
								<label for="oportunidad1-{{$tec->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$tec->id}}" id="oportunidad2-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
								<label for="oportunidad2-{{$tec->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$tec->id}}" id="oportunidad3-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
								<label for="oportunidad3-{{$tec->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$tec->id}}" id="noaplica-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$tec->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>

							<input type="hidden" name="respuesta[]" value="{{$tec->id}}">
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
				<button type="button" class="next3 btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones3">
				<table class="egt" id="tabla">
					<thead>
						<tr>

							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#ambiental"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Análisis Ambiental</th>

						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#oportunidad1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Amenaza</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#amenaza1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Oportunidad</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>No aplica</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($ambiental as $amb)
						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$amb->id}}" data-name="{{$amb->nombre}}" style="text-align: center;" class="thCampo1" id="tdFormulario">{{$amb->nombre}}</td>
							<td>
								<h5 style="color: #238276; font-weight: bold;">Es una</h5>
							</td>
							<td class="radio espacioformulario1">
								<input type="hidden" id="gender" name="preguntas[]" value="{{ $amb->id}}">

								<input type="radio" name="{{$amb->id}}" id="debilidad-{{$amb->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
								<label for="debilidad-{{$amb->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$amb->id}}" id="debilidadb-{{$amb->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
								<label for="debilidadb-{{$amb->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$amb->id}}" id="debilidadc-{{$amb->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
								<label for="debilidadc-{{$amb->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio espacioformulario1">
								<input type="radio" name="{{$amb->id}}" id="oportunidad1-{{$amb->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
								<label for="oportunidad1-{{$amb->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$amb->id}}" id="oportunidad2-{{$amb->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
								<label for="oportunidad2-{{$amb->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$amb->id}}" id="oportunidad3-{{$amb->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
								<label for="oportunidad3-{{$amb->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$amb->id}}" id="noaplica-{{$amb->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$amb->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>
							{{-- error --}}
							{{-- <input type="hidden"  name="respuesta[]" value="{{$amb->id}}"> --}}
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
				<button type="button" class="next4 btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones3">
				<table class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#legal"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Análisis Legal</th>
						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#oportunidad1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Amenaza</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#amenaza1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>Oportunidad</th>
							<th class="thCampo" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica1"><span class="icon-info icon-info1-1 icono-spam8-1"></span></a>No aplica</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($legal as $lga)

						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$lga->id}}" data-name="{{$lga->nombre}}" style="text-align: center;" class="thCampo1" id="tdFormulario">{{$lga->nombre}}</td>
							<td>
								<h5 style="color: #238276; font-weight: bold;">Es una</h5>
							</td>
							<td class="radio espacioformulario1">
								<input type="hidden" id="gender" name="preguntas[]" value="{{ $lga->id}}">

								<input type="radio" name="{{$lga->id}}" id="debilidad-{{$lga->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
								<label for="debilidad-{{$lga->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$lga->id}}" id="debilidadb-{{$lga->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
								<label for="debilidadb-{{$lga->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$lga->id}}" id="debilidadc-{{$lga->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
								<label for="debilidadc-{{$lga->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio espacioformulario1">
								<input type="radio" name="{{$lga->id}}" id="oportunidad1-{{$lga->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
								<label for="oportunidad1-{{$lga->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$lga->id}}" id="oportunidad2-{{$lga->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
								<label for="oportunidad2-{{$lga->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$lga->id}}" id="oportunidad3-{{$lga->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
								<label for="oportunidad3-{{$lga->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$lga->id}}" id="noaplica-{{$lga->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$lga->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>
							{{-- error --}}
							{{-- <input type="hidden"  name="respuesta[]" value="{{$lga->id}}"> --}}
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
				<button type="button" onclick="Save()" id="submitButton" class="next5 Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
			</fieldset>
			{{--<div class="infon">
				<a  id="boton1" data-toggle="modal" data-target="#exampleModal0" class="button2_agregar1" ><span class="icon-folder-plus"><div id="hover_agregar1">
					<h5>Agregar2</h5></div></span>
				</a>
				<a id="boton2" class="button2" data-toggle="modal" data-target="#exampleModal001"><span class="icon-info "></span>
				</a>
			</div>--}}
		</div>
	</form>

	<!-------------Amenazas, oportinodades y no aplica----->

	<div class="modal fade" id="amenaza1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado1">
				<div class="modal-body">
					<div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
						<p class="Nota" style="font-weight: bold; font-size: 15px" ;>Oportunidades:</p>
						<p>
							Son aquellos factores que resultan positivos o
							favorables del entorno en el que interactúa la
							empresa y que permiten obtener ventajas competitivas.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="noaplica1" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado1">
				<div class="modal-body">
					<div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
						<p class="Nota" style="font-weight: bold; font-size: 15px" ;>No Aplica:</p>
						<p>
							Este ítem es para indicar que no es ni una amenaza ni una
							oportunidad o simplemente un factor no se relaciona con las
							actividades que realiza la empresa.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="oportunidad1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado1">
				<div class="modal-body">
					<div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
						<p class="Nota" style="font-weight: bold; font-size: 15px" ;>Amenazas:</p>
						<p> Son aquellas situaciones provenientes del entorno
							que pueden afectar la actuación de la compañía de
							alguna manera.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="politico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado4">
				<div class="modal-body">
					<div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
						<p>
							<b style="color: black; font-weight: bold; text-align: center;">Análisis Político:</b>
							<br>
							<p>Son aquellos factores asociados a la clase política que puedan determinar e influir en la actividad de la empresa en el futuro, las diferentes políticas de los gobiernos locales, nacionales, continentales e incluso mundiales. Es importante entender la globalidad de lo que ocurre y sus relaciones, las normativas comerciales y aranceles.
							</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="tecnologico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado4">
				<div class="modal-body">
					<div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
						<p>
							<b style="color: black; font-weight: bold; text-align: center;">Análisis Tecnológico:</b>
							<br>
							<p> Son factores que permiten analizar como las tecnologías pueden impactar de manera positiva o negativa en su empresa como lo es la sistematización de los procesos, la implementación de nuevas maquinarias y equipos tecnológicos, entre otras.
							</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="social" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado4">
				<div class="modal-body">
					<div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
						<p>
							<b style="color: black; font-weight: bold; text-align: center;">Análisis Social:</b>
							<br>
							<p> Los factores sociales se enfocan en las fuerzas que actúan dentro de la sociedad y que afectan las actitudes, intereses y opiniones de las personas e influyen en sus decisiones de compra. Los factores sociales varían de un país a otro e incluyen aspectos tan diversos tales como, las religiones dominantes, las actitudes hacia los productos y servicios extranjeros, el impacto del idioma en la difusión de los productos en los mercados, el tiempo que la población dedica a la recreación y los papeles que los hombres y las mujeres tienen en la sociedad.
							</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="ambiental" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado4">
				<div class="modal-body">
					<div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
						<p>
							<b style="color: black; font-weight: bold; text-align: center;">Analisis Ambiental: </b>
							<br>
							<p>Son los factores que incluyen aspectos ecológicos y del medio ambiente que condicionan la dinámica de los procesos en las empresas como el cambio climático, las variaciones de las temperaturas y la conciencia ambiental.
							</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="legal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado4">
				<div class="modal-body">
					<div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
						<p>
							<b style="color: black; font-weight: bold; text-align: center;">Análisis Legal:</b>
							<br>
							<p> Estos factores se refieren a todos aquellos cambios en la normativa legal relacionada con la empresa, que le puede afectar de forma positiva o negativa como las leyes relativas al tema de su empresa y su aplicación.
							</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="economico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado4">
				<div class="modal-body">
					<div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
						<p>
							<b style="color: black; font-weight: bold; text-align: center;">Análisis Económico:</b>
							<br>
							<p> Consiste en analizar, pensar y estudiar sobre las cuestiones económicas actuales y futuras que pueden afectar la ejecución de las estrategias, determina la capacidad de compra de los consumidores, e influye en la frecuencia de compra.
							</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="durodemataruno" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="font-weight: bold;">Desarrollo del Análisis Pestal:</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 30px; cursor: pointer; margin-bottom: 1px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">

					<p>

						<br> A continuación, se habilitará una lista de factores en los cuales encontrará aspectos Políticos, Económicos, Sociales, Tecnológicos, Ambientales y Legales.

						Lo invitamos a seguir los siguientes pasos:<br>

						&nbsp;<br>1) Identifique si los factores mencionados representan para su empresa una oportunidad o amenaza
						&nbsp;<br>2) Después debe asignar una calificación a cada factor considerando su importancia.
						de la siguiente manera:
						<br>A (si es alto).
						<br>M (si es medio).
						<br>B (si es bajo).
						<br>En caso de no aplicar se puede marcar la opción N/A .

						<br>
						<br>¡Empecemos!

					</p>
				</div>
			</div>
		</div>
	</div>




</section>
<span class="icon-info icon-infoMod3" data-toggle="modal" data-target="#durodemataruno" style="cursor:pointer;"></span>

</form>
</section>
@yield('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {
		$('.items li:nth-child(6)').addClass("acti");
		$('.items li').click(function() {
			$('.items li').removeClass("acti");
			$(this).addClass("acti");


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
@push('script')

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
			if($("#form input[name='31']:radio").is(':checked') && $("#form input[name='32']:radio").is(':checked') &&
			$("#form input[name='33']:radio").is(':checked') && $("#form input[name='34']:radio").is(':checked') &&
			$("#form input[name='35']:radio").is(':checked') && $("#form input[name='36']:radio").is(':checked') &&
			$("#form input[name='37']:radio").is(':checked') && $("#form input[name='38']:radio").is(':checked') &&
			$("#form input[name='39']:radio").is(':checked') && $("#form input[name='40']:radio").is(':checked')
			)  {  
				toastr.success("Has seleccionado todos los campos correctamente")
			next_step.show();
			current_step.hide();
			$("#por").css("width","60%");
			//setProgressBar(++current);
				$("#formulario").submit();  
				} else{  
					toastr.error('Recuerda que los campos son obligatorios.','¡Hola!');
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
		$(".next2").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().next();
			if($("#form input[name='11']:radio").is(':checked') && $("#form input[name='12']:radio").is(':checked') &&
			$("#form input[name='13']:radio").is(':checked') && $("#form input[name='14']:radio").is(':checked') &&
			$("#form input[name='15']:radio").is(':checked') && $("#form input[name='16']:radio").is(':checked') &&
			$("#form input[name='17']:radio").is(':checked') && $("#form input[name='18']:radio").is(':checked') &&
			$("#form input[name='19']:radio").is(':checked') && $("#form input[name='20']:radio").is(':checked')
			)  {  
				toastr.success("Has seleccionado todos los campos correctamente")
			next_step.show();
			current_step.hide();
			$("#por").css("width","80%");
			//setProgressBar(++current);
				$("#formulario").submit();  
				} else{  
					toastr.error('Recuerda que los campos son obligatorios.','¡Hola!');
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
		$(".next3").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().next();
			if($("#form input[name='51']:radio").is(':checked') && $("#form input[name='52']:radio").is(':checked') &&
			$("#form input[name='53']:radio").is(':checked') && $("#form input[name='54']:radio").is(':checked') &&
			$("#form input[name='55']:radio").is(':checked') && $("#form input[name='56']:radio").is(':checked') &&
			$("#form input[name='57']:radio").is(':checked') && $("#form input[name='58']:radio").is(':checked') &&
			$("#form input[name='59']:radio").is(':checked') && $("#form input[name='60']:radio").is(':checked')
			)  {  
				toastr.success("Has seleccionado todos los campos correctamente")
			next_step.show();
			current_step.hide();
			$("#por").css("width","90%");
			//setProgressBar(++current);
				$("#formulario").submit();  
				} else{  
					toastr.error('Recuerda que los campos son obligatorios.','¡Hola!');
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
		$(".next4").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().next();
			if($("#form input[name='41']:radio").is(':checked') && $("#form input[name='42']:radio").is(':checked') &&
			$("#form input[name='43']:radio").is(':checked') && $("#form input[name='44']:radio").is(':checked') &&
			$("#form input[name='45']:radio").is(':checked') && $("#form input[name='46']:radio").is(':checked') &&
			$("#form input[name='47']:radio").is(':checked') && $("#form input[name='48']:radio").is(':checked') &&
			$("#form input[name='49']:radio").is(':checked') && $("#form input[name='50']:radio").is(':checked')
			)  {  
				toastr.success("Has seleccionado todos los campos correctamente")
			next_step.show();
			current_step.hide();
			$("#por").css("width","100%");
			//setProgressBar(++current);
				$("#formulario").submit();  
				} else{  
					toastr.error('Recuerda que los campos son obligatorios.','¡Hola!');
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
function Save(){
if($("#form input[name='21']:radio").is(':checked') && $("#form input[name='22']:radio").is(':checked')&&
			$("#form input[name='23']:radio").is(':checked') && $("#form input[name='24']:radio").is(':checked') &&
			$("#form input[name='25']:radio").is(':checked') && $("#form input[name='26']:radio").is(':checked') &&
			$("#form input[name='27']:radio").is(':checked') && $("#form input[name='28']:radio").is(':checked') &&
			$("#form input[name='29']:radio").is(':checked') && $("#form input[name='30']:radio").is(':checked')){

	toastr.success("Has seleccionado todos los campos correctamente")
	var elemento = document.querySelector('#submitButton');

    elemento.setAttribute("type", "submit");
	
}else{toastr.error('Recuerda que todos los campos son obligatorios!', '¡Hola!');}

}

</script>



<script>
	$(document).ready(function() {
		var planeacion = localStorage.getItem('id');
		$(".idPlaneacion").val(planeacion);
		console.log(planeacion);
	});
</script>

<script>
	$(document).ready(function() {
		var id = localStorage.getItem('id');
		$.ajax({
			url: "/analisisPestal/show/" + id,
			type: 'get',
			success: function(data) {
				console.log(data);


				if (data != null) {
					for (i of data) {

						if (i.idRespuesta == 'aAlta') {
							$('#debilidad-' + i.analisis + "-" + id).prop('checked', true);
						} else if (i.idRespuesta == 'aMedia') {
							$('#debilidadb-' + i.analisis + "-" + id).prop('checked', true);
						} else if (i.idRespuesta == 'aBaja') {
							$('#debilidadc-' + i.analisis + "-" + id).prop('checked', true);
						} else if (i.idRespuesta == 'oAlta') {
							$('#oportunidad1-' + i.analisis + "-" + id).prop('checked', true);
						} else if (i.idRespuesta == 'oMedia') {
							$('#oportunidad2-' + i.analisis + "-" + id).prop('checked', true);
						} else if (i.idRespuesta == 'oBaja') {
							$('#oportunidad2-' + i.analisis + "-" + id).prop('checked', true);
						} else if (i.idRespuesta == 'NA') {
							$('#noaplica-' + i.analisis + "-" + id).prop('checked', true);
						}

					}
				}
			},
			error: function() {
				console.log("error");
			}
		});
	});
</script>
<script type="text/javascript">
	var i = 0;

	function move() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("bar");
			var width = 10;
			var id = setInterval(frame, 10);

			function frame() {
				if (width >= 100) {
					clearInterval(id);
					i = 0;
				} else {
					width += 20;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}
</script>

@endpush