@extends('layouts.nav2')

@section('content')
<header>
	<div class="contenedor4">
		<h1 class="titulo2estraMod3">Matriz de Crecimiento</h1>
		<p><br>
		La matriz Ansoff en adelante llamada matriz de crecimiento es una herramienta de planificación estratégica 
		que ayuda a los empresarios a crear estrategias para el crecimiento. En ella se identifican estrategias 
		de crecimiento y desarrollo, donde cualquier empresa o institución puede elegir la opción de crecimiento 
		que se adapte a su situación actual, y con ello mejorar su rentabilidad y posicionamiento en el mercado.	</p>
	</div>
	{{-- <form id="form" style="display:none" action="{{ route('analisisEFI')}}" method="POST" role="form">
		@csrf
		<input type="text" name="id_Planeacion" value="{{$id_Planeacion}}">
		<button type="submit" id="btn1"></button>
		</form> --}}
	<a  onclick="btn12()" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
	<span class="icon-info icon-infoMod3" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="font-weight: bold;">Desarrollo de la Matriz de Crecimiento:</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
					

				</div>
				<div class="modal-body">
				<br>
					En la Matriz de crecimiento se evalúa la cartera de productos en dos ejes: Productos 
					vs Mercados en relación con las variables nuevas o existentes para obtener así 4 
					oportunidades de desarrollo así: 
					<br>1: Estrategia de penetración de mercados.
					<br>2: Estrategia de desarrollo de nuevos mercados.
					<br>3: Estrategia de desarrollo de nuevos productos.
					<br>4: Estrategia de diversificación.<br><br>

					A continuación, encontrara una lista de variables para cada uno de los cuadrantes 
					donde podrá marcar la casilla según le aplique a su empresa, la calificación va de 1 
					a 5 según la frecuencia de utilización de la estrategia donde: <br>
					1 es Nunca.<br> 
					2 es Raramente.<br> 
					3 es Ocasionalmente.<br>
					4 es Frecuentemente.<br>
					5 es Muy frecuentemente. 

					
					
					
					<br>
				</div>
			</div>
		</div>
	</div>
	
</section>

<form method="POST" style="display:none" id="form" action="{{route('mercado')}}" >
	@csrf
		<input type="text" id="plane" name="plane">	
		{{-- <input type="text" id="a" name="a1">
        <input type="text" id="b" name="b1">
		<input type="text" id="grafica" name="grafica">	 --}}
		<button  type="submit" id="btn12">		
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
@jquery
@toastr_js
@toastr_render
<script>

  $(document).ready(function () {
   $('.items li:nth-child(8)').addClass("acti");
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

<script>
	var id = localStorage.getItem('id');
	// var grafica = localStorage.getItem('grafica');
	// var a = localStorage.getItem('grafica22');
	// var b = localStorage.getItem('grafica11');
	
	$('#id_planecion').val(id);
	// $('#grafica').val(grafica);
	// $('#a').val(a);
	// $('#b').val(b);
	
	console.log(id);
	// console.log(a);
	// console.log(b);
	

	function btn12(){
		document.getElementById('btn12').click();
	}

</script>
@endsection
