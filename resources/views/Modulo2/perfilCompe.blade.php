@extends('layouts.nav2')

@section('content')
<header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	@yield('js')
	@section('f')
	@endsection
	@yield('progres')
	
	<div>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
</header>
<link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
<section class="contenedorper5">
	<form method="POST" id="form" action="{{route('saveEmpresa')}}">
		@csrf
		<!-- <input   name="cantidad"  style="display:none" style="display:none" id="cantidad" > -->
		<input type="text" style ="display:none" value="{{$cantidad}}" class="form-control" id="cantidad" aria-describedby="emailHelp"  name="cantidad" value="{{$cantidad}}">
		<div id="regiration_form" >
		
		</div>
	</form>
	
<div class="modal fade" id="r1" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-modificado1">
            <div class="modal-body">
                <div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				<p class="Nota" style="font-weight: bold; font-size: 15px";>Peso Relativo:</p>
                    <p>
                        Cada factor crítico de éxito debe tener un peso relativo que oscila entre 0,0
                       (poca importancia) a 1.0 (alta importancia).
                        El número indica la importancia que tiene el factor en la industria.</p>
                </div>
            </div>
        </div>
    </div>
</div>   
                                            
<div class="modal fade" id="r4" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-modificado1">
            <div class="modal-body">
                <div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				<p class="Nota" style="font-weight: bold; font-size: 15px";>Factores Claves:</p>
                    <p>
                        Son las áreas claves, que deben llevarse al nivel más alto posible
                        de excelencia si la empresa quiere tener éxito en una industria
                        en particular. Estos factores varían entre diferentes industrias
                        o incluso entre diferentes grupos estratégicos e incluyen tanto
                        factores internos como externos.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="r2" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-modificado1">
            <div class="modal-body">
                <div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				<p class="Nota" style="font-weight: bold; font-size: 15px";>Ponderación:</p>
                    <p>
                    Es el resultado de la multiplicación del peso relativo por la calificación asignada. Este resultado es automático. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="r3" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-modificado1">
            <div class="modal-body">
                <div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				<p class="Nota" style="font-weight: bold; font-size: 15px";>Calificación:</p>
                    <p>
                        Asignar una calificación a cada variable, esta calificación es de 1 a 4. Siendo:<br>
                        1: Debilidad Principal.<br>
                        2: Debilidad Menor<br>
                        3: Fortaleza Menor.<br>
                        4: Fortaleza Principal.
                       </p>
                </div>
            </div>
        </div>
    </div>
</div>

@jquery
@toastr_js
@toastr_render
</section>
<style type="text/css">
	:-moz-placeholder { /* Firefox 18- */ color: red; } 
	::-moz-placeholder { /* Firefox 19+ */ color: red; } 
	:-ms-input-placeholder { color: red; }
</style>

@jquery
@toastr_js
@toastr_render

@yield('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
     $('.items li:nth-child(2)').addClass("acti");
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

@push('script')
<script src="{{asset('js/solo_numeros.js')}}"></script>
<script src="{{asset('js/solonumber.js')}}"></script>
<script src=" {{asset('js/toastr.js')}}"></script>

<script>
	var cantidad = $('#cantidad').val();
	var i = 0;
	while(i < cantidad){
		var tabla = '<fieldset class="opciones">'
		tabla = tabla+'<table class="egt" id="tabla">';
		tabla = tabla + ' <thead>';
		tabla =  tabla +' <tr>';
		tabla = tabla + ' <th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Factores Claves<span data-toggle="modal" data-target="#r4" class="icon-info icon-info1-1 icono-spam6-1" id="infoAnsorft3"></span></th>';
		tabla =  tabla +' <th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#r1" class="icon-info icon-info1-1 icono-spam6-1" id="infoAnsorft"></span></th>';
		tabla = tabla + '<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#r3" class="icon-info icon-info1-1 icono-spam6-1" id="infoAnsorft1"></span></th>';
		tabla =  tabla +' <th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#r2" class="icon-info icon-info1-1 icono-spam6-1" id="infoAnsorft2"></span></th>';
		tabla =  tabla +' </tr>';
		tabla = tabla + '</thead>';
		tabla =  tabla +'<tbody>';
		tabla =  tabla +'<div class="MiCompetencia">';
		tabla =  tabla +'<label style="font-size: 16px;">Competencia<input type="text" name="nombreEmpresa[]" required  class="nombre'+i+'" id="nombre" placeholder="Ingrese competencia" style="background: none; outline:none; color:white;font-weight: bold; text-align:center; padding: 8px;"></label>';
		tabla =  tabla +'</div>';
		tabla = tabla + ' @foreach ($factorClave as $p)';
		tabla = tabla + '<tr id = "material'+i+'{{$p->id}}" class = "tabla material'+i+'">';
		tabla = tabla + ' <th style="border: grey 1px solid;width: 40%;border-radius: 10px;text-align: center;" data-column_name="idRespuestaCompe" data-id="{{$p->id}}" data-name="$p->nombre">{{$p->nombre}}</th>';
		tabla =  tabla +' <input type="hidden" name="idFactorClave[]" value="{{$p->id}}">';
		tabla = tabla + ' <td style="position: relative;border: grey 1px solid;width: 15%;margin-left: 75px;margin-top: 18px;border-radius: 10px;" class="tdclass"><input maxlength="4" value="{{ $p->pesoRelativo  }}" style="outline:none;text-align:center;" type="text" id="pesoPonderado"  name="pesoRelativo[]" required  class = "cantidad_req'+i+'" onkeyup="obtTotalMat'+i+'({{$p->id}})" onkeypress="return solonumero(event)"></td></td>';
		tabla =  tabla +' <td style="position: relative;border: grey 1px solid;width: 15%;margin-left: 75px;margin-top: 18px;border-radius: 10px;" class="tdclass"><input maxlength="1" style="outline:none;text-align:center;" type="text" id="pesoRelativo"  name="calificacion[]"  required class = "valor_unitreq'+i+'" onkeyup="obtTotalMat'+i+'({{$p->id}})" onkeypress="return solonumber(event)">';
		tabla = tabla + ' <td style="position: relative;border: grey 1px solid;width: 15%;margin-left: 75px;margin-top: 18px;border-radius: 10px;" class="tdclass1"><input maxlength="4" style="outline:none;text-align:center;" type="text" id="calificacion" name="pesoPonderado[]" required  class = "valor_totreq'+i+'" onchange="calcTotal'+i+'()" onkeypress="return solonumeros(event)">';
		tabla =  tabla +' </tr>';
		tabla =  tabla +' @endforeach';
		tabla = tabla + ' <tr class="total2">';
		tabla = tabla + ' <th>Total</th>';
		tabla =  tabla +' <td class="tdclass"><textarea readonly id="pesorpesoPonderado'+i+'" class="tablacam"  name="totalPeso[]" onkeypress="return solonumeros(event)"></textarea></td>';
		tabla = tabla + ' <td class="tdclass"><textarea readonly id="totalcalificacion'+i+'" class="tablacam"  name="totalCalificacion[]" onkeypress="return solonumber(event)" ></textarea></td>';
		tabla = tabla + ' <td class="tdclass1"><textarea readonly id="granTotal'+i+'" class="tablacam totales"  name="totalPonderado[]" onkeypress="return solonumeros(event)" ></textarea></td>';
		tabla = tabla + ' </tr>';
		tabla = tabla + ' </tbody>';
		tabla =  tabla +'</table>';
		if(i == 0 && i !== cantidad -1) {
			tabla =  tabla + ' <button type="button" id="btn" class="next btn Ahora btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>';
		}else if (cantidad > 1 && i == cantidad -1){
			tabla =  tabla +'<button type="button" class="Ahora2 margen2-1 previous btn btn-default">Anterior</button>';
			tabla =  tabla + '<button type="submit" class=" btn Ahora3 margen2-2 btn btn-planeem wafes-effect waves-light btn-lg pull right" onclick="guardarempresas()"  id="submitButton">Guardar</button>';
		}else if(i == cantidad -1 && cantidad == 1){
			tabla =  tabla + '<button type="submit" class="guardarcompetencia Ahora3" onclick="guardarempresas()" id="submitButton">Guardar</button>';
		}else if(cantidad > 1){
			tabla =  tabla +'<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>';
			tabla =  tabla + ' <button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>';
		}
		tabla =  tabla + '</fieldset>';
		tabla += '</form>'
		$('#regiration_form').append(tabla);
		if(i === 0){
				function obtTotalMat0(index){
					if($("#material0"+index+" .cantidad_req0").val() < 0){
						toastr.error('El peso Ponderado es obligatorio', '!Hola!')
					}
					if($("#material0"+index+" .valor_unitreq0").val() == " "){
						toastr.error('El peso pesoRe lativo', '!Hola')
					}
					if($("#material0"+index+" .cantidad_req0").val() > 1 || $("#material0"+index+" .cantidad_req0").val() < 0 ){
						toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
					}else if($("#material0"+index+" .valor_unitreq0").val() > 4 || $("#material0"+index+" .valor_unitreq0").val() < 0){
						toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
					}else{
					
						var Relativo  = $("#material0"+index+" .cantidad_req0").val();
					
						var Calificacion = $("#material0"+index+" .valor_unitreq0").val();
				
						var tot = ($("#material0"+index+" .cantidad_req0").val()) * $("#material0"+index+" .valor_unitreq0").val();
						tot = tot.toFixed(1);

					$("#material0"+index+" .valor_totreq0").val(tot);
					}
					calcTotal0();
				}
		function calcTotal0() {

            var tot0 = 0;
            var Relativo0 = 0;
            var Calificacion0 = 0;
            $(".material0 .valor_totreq0").each(function () {
                tot0+=Number($(this).val());
            });
            $(".material0 .cantidad_req0").each(function () {
                Relativo0+=Number($(this).val());
            });
            $(".material0 .valor_unitreq0").each(function () {
                Calificacion0+=Number($(this).val());
            });

			tot0 = tot0.toFixed(1);
			Relativo0 = Relativo0.toFixed(1);
			Calificacion0 = Calificacion0.toFixed(1);

			$("#granTotal0").val(tot0);
            $("#pesorpesoPonderado0").val(Relativo0);
            $("#totalcalificacion0").val(Calificacion0);


			if( $("#pesorpesoPonderado0").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }

			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));
			var pesorpesoPonderado0 = parseFloat ($("#granTotal0").val());
			var suma = PuntuaciónPonderada + pesorpesoPonderado0;

			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0)', '!Hola!')
			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}

	}


			




              
			
		}
			
		if(i === 1){
				function obtTotalMat1(index){
					if($("#material1"+index+" .cantidad_req1").val() < 0){
						toastr.error('El peso Ponderado es obligatorio', '!Hola')
					}
					if($("#material1"+index+" .valor_unitreq1").val() == " "){
						toastr.error('El peso pesoRe lativo', '!Hola')
					}
					if($("#material1"+index+" .cantidad_req1").val() > 1 || $("#material1"+index+" .cantidad_req1").val() < 0 ){
						toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
						}else if($("#material1"+index+" .valor_unitreq1").val() > 4 || $("#material1"+index+" .valor_unitreq1").val() > 4){
							toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
					}else{
					
						var Relativo1 = $("#material1"+index+" .cantidad_req1").val();
					
						var Calificacion1 = $("#material1"+index+" .valor_unitreq1").val();
				
						var tot1 = ($("#material1"+index+" .cantidad_req1").val()) * $("#material1"+index+" .valor_unitreq1").val();
							tot1 = tot1.toFixed(1);

						$("#material1"+index+" .valor_totreq1").val(tot1);
					}
					calcTotal1();
				}

		function calcTotal1() {
            var tot1 = 0;
            var Relativo1= 0;
            var Calificacion1 = 0;
            $(".material1 .valor_totreq1").each(function () {
                tot1+=Number($(this).val());
            });
            $(".material1 .cantidad_req1").each(function () {
                Relativo1+=Number($(this).val());
            });
            $(".material1 .valor_unitreq1").each(function () {
                Calificacion1+=Number($(this).val());
            });

			tot1 = tot1.toFixed(1);
			Relativo1 = Relativo1.toFixed(1);
			Calificacion1 = Calificacion1.toFixed(1);

            $("#granTotal1").val(tot1);
            $("#pesorpesoPonderado1").val(Relativo1);
            $("#totalcalificacion1").val(Calificacion1);
			}



            if( $("#pesorpesoPonderado1").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
			}
			

			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado1 = parseFloat ($("#granTotal1").val());
			var pesorpesoPonderado0 = parseFloat ($("#granTotal0").val());

			var suma = PuntuaciónPonderada + (pesorpesoPonderado0 + pesorpesoPonderado1)/2;

			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0) ', '!Hola!')

			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}


		}
		
		if(i === 2){
				function obtTotalMat2(index){
					if($("#material2"+index+" .cantidad_req2").val() == null){
						toastr.error('El peso Ponderado es obligatorio', '!Hola!')
					}
					if($("#material2"+index+" .valor_unitreq2").val() == " "){
						toastr.error('El peso pesoRe lativo', '!Hola')
					}
					if($("#material2"+index+" .cantidad_req2").val() > 1 || $("#material2"+index+" .cantidad_req2").val() < 0 ){	
						toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
					}else if($("#material2"+index+" .valor_unitreq2").val() > 4 || $("#material2"+index+" .valor_unitreq2").val() > 4){
						toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
					}else{
						var Relativo2 = $("#material2"+index+" .cantidad_req2").val();
						var Calificacion2 = $("#material2"+index+" .valor_unitreq2").val();
						var tot2 = ($("#material2"+index+" .cantidad_req2").val()) * $("#material2"+index+" .valor_unitreq2").val();

						tot2 = tot2.toFixed(2);

						$("#material2"+index+" .valor_totreq2").val(tot2);
					}
					calcTotal2();
				}
		function calcTotal2() {
            var tot2 = 0;
            var Relativo2= 0;
            var Calificacion2 = 0;
            $(".material2 .valor_totreq2").each(function () {
                tot2+=Number($(this).val());
            });
            $(".material2 .cantidad_req2").each(function () {
                Relativo2+=Number($(this).val());
            });
            $(".material2 .valor_unitreq2").each(function () {
                Calificacion2+=Number($(this).val());
            });

			tot2 = tot2.toFixed(1);
			Relativo2 = Relativo2.toFixed(1);
			Calificacion2 = Calificacion2.toFixed(1);

            $("#granTotal2").val(tot2);
            $("#pesorpesoPonderado2").val(Relativo2);
            $("#totalcalificacion2").val(Calificacion2);

			    
            if( $("#pesorpesoPonderado2").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
			}


			
			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado1 = parseFloat ($("#granTotal1").val());
			var pesorpesoPonderado2 = parseFloat ($("#granTotal2").val());
			var pesorpesoPonderado0 = parseFloat ($("#granTotal0").val());

			var suma = PuntuaciónPonderada + (pesorpesoPonderado0 + pesorpesoPonderado1 + pesorpesoPonderado2)/3;

			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0) ', '!Hola!')

			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}


			}
		}
		if(i === 3){
				function obtTotalMat3(index){
					if($("#material3"+index+" .cantidad_req3").val() == " "){
						toastr.error('El peso Ponderado es obligatorio', '!Hola')
					}
					if($("#material3"+index+" .valor_unitreq3").val() == " "){
						toastr.error('El peso pesoRe lativo', '!Hola')
					}
					if($("#material3"+index+" .cantidad_req3").val() > 1 || $("#material3"+index+" .cantidad_req3").val() < 0 ){
						toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
					}else if($("#material3"+index+" .valor_unitreq3").val() > 4 || $("#material3"+index+" .valor_unitreq3").val() > 4){	
						toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
					}else{
					
						var Relativo3 = $("#material3"+index+" .cantidad_req3").val();
					
						var Calificacion3 = $("#material3"+index+" .valor_unitreq3").val();
				
						var tot3 = ($("#material3"+index+" .cantidad_req3").val()) * $("#material3"+index+" .valor_unitreq3").val();
						tot3 = tot3.toFixed(2);

					$("#material3"+index+" .valor_totreq3").val(tot3);
					}
					calcTotal3();
				}
		function calcTotal3() {
            var tot3 = 0;
            var Relativo3= 0;
            var Calificacion3 = 0;
            $(".material3 .valor_totreq3").each(function () {
                tot3+=Number($(this).val());
            });
            $(".material3 .cantidad_req3").each(function () {
                Relativo3+=Number($(this).val());
            });
            $(".material3 .valor_unitreq3").each(function () {
                Calificacion3+=Number($(this).val());
            });

			tot3= tot3.toFixed(1);
			Relativo3 = Relativo3.toFixed(1);
			Calificacion3 = Calificacion3.toFixed(1);

            $("#granTotal3").val(tot3);
            $("#pesorpesoPonderado3").val(Relativo3);
			$("#totalcalificacion3").val(Calificacion3);
			
			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado1 = parseFloat ($("#granTotal1").val());
			var pesorpesoPonderado2 = parseFloat ($("#granTotal2").val());
			var pesorpesoPonderado3 = parseFloat ($("#granTotal3").val());
			var pesorpesoPonderado0 = parseFloat ($("#granTotal0").val());

			var suma = PuntuaciónPonderada + (pesorpesoPonderado0 + pesorpesoPonderado1 + pesorpesoPonderado2+pesorpesoPonderado3)/4;

			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0) ', '!Hola!')

			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}

			    
            if( $("#pesorpesoPonderado3").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }

			}
		}
		if(i === 4){
				function obtTotalMat4(index){
					if($("#material4"+index+" .cantidad_req4").val() == " "){
						toastr.error('El peso Ponderado es obligatorio', '!Hola')
					}
					if($("#material4"+index+" .valor_unitreq4").val() == " "){
						toastr.error('El peso pesoRe lativo', '!Hola')
					}
					if($("#material4"+index+" .cantidad_req4").val() > 1 || $("#material4"+index+" .cantidad_req4").val() < 0 ){
						toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
					}else if($("#material4"+index+" .valor_unitreq4").val() > 4 || $("#material4"+index+" .valor_unitreq4").val() > 4){
						toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
					}else{
					
						var Relativo4 = $("#material4"+index+" .cantidad_req4").val();
					
						var Calificacion4 = $("#material4"+index+" .valor_unitreq4").val();
				
						var tot4 = ($("#material4"+index+" .cantidad_req4").val())* $("#material4"+index+" .valor_unitreq4").val();
						tot4 = tot4.toFixed(2);

					$("#material4"+index+" .valor_totreq4").val(tot4);
					}
					calcTotal4();
				}
		function calcTotal4() {
            var tot4 = 0;
            var Relativo4= 0;
            var Calificacion4 = 0;
            $(".material4 .valor_totreq4").each(function () {
                tot4+=Number($(this).val());
            });
            $(".material4 .cantidad_req4").each(function () {
                Relativo4+=Number($(this).val());
            });
            $(".material4 .valor_unitreq4").each(function () {
                Calificacion4+=Number($(this).val());
            });

			tot4 = tot4.toFixed(1);
			Relativo4 = Relativo4.toFixed(1);
			Calificacion4 = Calificacion4.toFixed(1);

            $("#granTotal4").val(tot4);
            $("#pesorpesoPonderado4").val(Relativo4);
            $("#totalcalificacion4").val(Calificacion4);
			}

			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado1 = parseFloat ($("#granTotal1").val());
			var pesorpesoPonderado2 = parseFloat ($("#granTotal2").val());
			var pesorpesoPonderado3 = parseFloat ($("#granTotal3").val());
			var pesorpesoPonderado4 =parseFloat ($("#granTotal4").val());
			var pesorpesoPonderado0 = parseFloat ($("#granTotal0").val());

			var suma = PuntuaciónPonderada + (pesorpesoPonderado0 + pesorpesoPonderado1 + pesorpesoPonderado2 + pesorpesoPonderado3 + pesorpesoPonderado4)/5;

			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0) ', '!Hola!')
			}   
			
            if( $("#pesorpesoPonderado4").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}

		}
		i++;
	}

	input = `<input type="hidden" name="count" value="${cantidad}"></input>`;
	planeacion = `<input type="hidden" name="idPlaneacion" value="${localStorage.getItem('id')}"></input>`;
	$('#regiration_form').append(input);
	$('#regiration_form').append(planeacion);
</script>

<script>
	$( document ).ready(function() {
		var id = localStorage.getItem('id');
		$.ajax({
			url:"/analisisporter/show/"+id,
			type:'get',
			success:function(data){
					console.log(data);
						if(data != null){
							for(i of data){
								console.log('#ponde-'+i.idTipoPregunta+'-'+id);
								console.log('#cali-'+i.idTipoPregunta+'-'+id);
								console.log('#puntuacion-'+i.idTipoPregunta+'-'+id);
						
								if(i.pesoRelativo != null){
									$('#ponde-'+i.idTipoPregunta+'-'+id).val(i.pesoRelativo);
									$('#cali-'+i.idTipoPregunta+'-'+id).val(i.calificacion);
									$('#puntuacion-'+i.idTipoPregunta+'-'+id).val(i.pesoPonderado);
								} 
											
								}
							}
						}
					
				})
	});
</script>



<script>
function guardarempresas() {
	// toastr.error('Todos los campos son obligatorios ')

	
}


// function guardarempresas(){
// 	var tabla1 = parseFloat($('#granTotal0').val());
// 	var tabla2 = parseFloat($('#granTotal1').val());
// 	var tabla3 = parseFloat($('#granTotal2').val());
// 	var tabla4 = parseFloat($('#granTotal3').val());
// 	var tabla5 = parseFloat($('#granTotal4').val());

// 	var total = (tabla1+tabla2+tabla3+tabla4+tabla5)/5

// 	var pondelocal = parseFloat(localStorage.getItem('PuntuaciónPonderada'));
// 	console.log(pondelocal);
// 	var total = total+pondelocal;

// 	if(total > 4){
// 		toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0) ', '!Hola!')
// 	}else{
// 		localStorage.setItem('PuntuaciónPonderada',total);

// 	}

// }
//Validación de formulario 

// const form = document.getElementById('form')
// const button = document.getElementById('submitButton')
// const name = document.getElementById('nombre')
// const pesoPonderado = document.getElementById('pesoPonderado')
// const pesoRelativo = document.getElementById('pesoRelativo')
// const calificacion = document.getElementById('calificacion')
// const formIsValid = {
//     name: false,
//     pesoPonderado: false,
//     pesoRelativo: false,
//     calificacion: false
// }
// form.addEventListener('submit', (e) => {
//     e.preventDefault()
//     validateForm()
// })
// name.addEventListener('change', (e) => {
//     if(e.target.value.trim().length > -1) formIsValid.name = true
// })
// pesoPonderado.addEventListener('change', (e) => {
//     if(e.target.value.trim().length > -1) formIsValid.pesoPonderado = true
// })
// pesoRelativo.addEventListener('change', (e) => {
//     if(e.target.value.trim().length > -1) formIsValid.pesoRelativo = true
// })
// calificacion.addEventListener('change', (e) => {
//     if(e.target.value.trim().length > -1 ) formIsValid.calificacion = true
// })
// const validateForm = () => {
//     const formValues = Object.values(formIsValid)
//     const valid = formValues.findIndex(value => value == false)
//     if(valid == -1) form.submit()
//     else toastr.error('Los sentimos, uno de los campos no esta lleno. Por favor revisa que todos los campos estén llenos ', '!Hola')
// }
</script>


@endpush