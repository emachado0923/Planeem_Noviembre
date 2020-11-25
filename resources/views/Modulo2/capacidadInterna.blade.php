@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
</header>
<div class="contenedorpe">
	<h2 class="titulo2estraMod3">Perfil de Capacidad Interna –PCI</h2><br>
	<p>
		Es un método que permite evaluar las fortalezas y debilidades de la compañía en relación con las oportunidades y amenazas, a manera de diagnóstico estratégico involucrando los factores que afectan la operación corporativa. <br>Para su desarrollo se examinarán 5 categorías:<strong>
		<br><strong>1. La capacidad directiva.</strong>
		<br><strong>2. La capacidad competitiva (de mercadeo).</strong>
		<br><strong>3. La capacidad financiera.</strong>
		<br><strong>4. La capacidad tecnológica (productiva).</strong>
		<br><strong>5. La capacidad de talento humano.</strong>
	</p>
</div>
<form  method="post"  role="from" action="{{route('capacidadInte')}}" >
	@csrf
	<textarea name="nombre_proyecto"   style="display: none;" id="nombre_proyecto" ></textarea>
	<button   type="submit" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</button>
</form>
@jquery
@toastr_js
@toastr_render
<span class="icon-info icon-infoMod3" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" style="font-weight: bold;">Análisis Interno:</h5>
				<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
				margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

			</div>
			<div class="modal-body">
				<p><br>
				El Análisis interno, permite identificar la estrategia actual y la posición de la 
				empresa frente a la competencia. Para esto se debe analizar los factores con los que 
				cuenta la empresa, con el fin de evaluar los recursos existentes, eliminar los puntos 
				débiles y potencializar los puntos fuertes. Para ello, realizaremos el desarrollo de la 
				matriz de Capacidad Interna y la matriz de Perfil Competitivo.
				<br><br>
				¡Empecemos!
			
				</p>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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


@yield('script')


@endsection
