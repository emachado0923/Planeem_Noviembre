
@extends('layouts.navmod')
@section('content')
<header>	
   <link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
    <script src=" {{asset('js/toastr.js')}}"></script>


	<div class="progress">
            <div id="por" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
            </div>
</header>

<div id="regiration_form">
	<form method="post"  role="from" id="form" action="{{route('update/vision1')}}" novalidate>
	@csrf
		@foreach ($pensamiento as $pensamiento)
		@if ($pensamiento->id_Planeacion == $proyecto->id_Planeacion)
		<input style="display: none;"  type="text"  value="{{$pensamiento->Vision_Organizacional}}" id="Vision_Organizacional">
		<input style="display: none;"  type="text"  value="{{$pensamiento->id_Planeacion}}" id="id_Planeacion" name="id_Planeacion">
		@endif
		@endforeach
		<section  id = "text">
		<div class="contenedor3">

		
		<div id="alert">
		</div>
		<textarea maxlength="1000" class="campo form-control is-invalid"  id="Vision" name="Vision_Organizacional" ></textarea>
		</div>
		</section>
		<fieldset id="paso1">
			<div>
				<div>
					<p class="enunciadoHara"><b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b><br>
					
						<b style="color: #0AB5A0">Ejemplo: Mejorar la salud y el bienestar a través de productos de salud y de higiene</b></p>
					</div>
					<p class="formulaMision">Fórmula: <b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b> +
						<b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b></p>
					</div>
					<a onclick="paso2()"   style="color:white"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
				</fieldset>
				<fieldset id="paso2">
					<div>
						<div>
							<p class="hara"><b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b><br>
								¿Qué acciones implementaremos?<br>
								<b style="color: #0AB5A0">Ejemplo:”Reduciendo el impacto ambiental usando empaques reciclables”</b></p>
							</div>
						
							<p class="formulaMision">Fórmula: <b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b> +
								<b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b></p>
							</div>
							<a onclick="paso3()" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
					        <a onclick="paso1()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</a>
						</fieldset>
						<fieldset id="paso3">
							<div>
								<div>
									<p class="hara2"><b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b><br>
										¿Será más incluyente?<br>
										¿Tendrá un gran ambiente de trabajo?<br>
	
										<b style="color: #0AB5A0">Ejemplo:Mejorando las condiciones laborales de mis colaboradores ofreciendo un trabajo digno,
											con gran impacto en la salud y el bienestar,a través de productos de salud
											y de higiene reduciendo los impactos negativos para el medio ambiente.</b>
									</p>
								</div>
								<p class="formula">Fórmula: <b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b>
								</p>
							</div>
					
							<button type = "button"  id="botonGuardar" onclick="guardartt()" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Guardar</button>
							<button onclick="paso3()" style="color:white;" class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</button>
						</fieldset>
					</form>
				</div>


				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

				<script>
					var propuesat = $( "#Vision_Organizacional" ).val();
					document.getElementById('Vision').innerHTML = propuesat;

					var id_Planeacion = $('#id_Planeacion').val();
					document.getElementById('id_Planeacion').innerHTML = id_Planeacion;

				</script>

				<script>

					$(document).ready(function () {
						$('.items li:nth-child(3)').addClass("acti");
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
					});
	
			

					var contador = 0;
					
				

    document.getElementById('paso2').style.display = 'none';
    document.getElementById('alert').style.display = 'none';
    document.getElementById('paso3').style.display = 'none';






function paso1(){
	document.getElementById('por').style.width='30%';
    document.getElementById('paso1').style.display = 'block';
    document.getElementById('paso2').style.display = 'none';
    document.getElementById('paso3').style.display = 'none';

}


function paso2(){ 
    let vision = document.getElementById('Vision').value;

       if(vision == ""){
		toastr.error('error', 'el campo es obligatorio');

       }else{
		document.getElementById('por').style.width='60%';
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'block';
        document.getElementById('paso3').style.display = 'none';
       

        
       }


}


function paso3(){ 
    let vision = document.getElementById('Vision').value;
       if(vision == ""){
		toastr.error('error', 'el campo es obligatorio');
      
       }else{
		document.getElementById('por').style.width='100%';
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'block';
       
       }


}









	function guardartt(){
    let vision = document.getElementById('Vision').value;

    if(vision == ""){
		
		document.getElementById('alert').style.display = 'block';
		toastr.error('error', 'el campo es obligatorio');

		
	}
	
	else{		
        try{
			
			localStorage.setItem('Vision',vision);

		    var elemento = document.querySelector('#botonGuardar');

            elemento.setAttribute("type", "submit");

			

        }catch(e){
			 console.log(e);
			 alert("entro2")
        }
    }
}
				</script>





				@endsection