@extends('layouts.nav4')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
</header>
<div>
	<h2 class="titulo2estraMod3">Resultado de Indicadores</h2>
	<p class="parrafoMod3">
		<br>
        Felicitaciones has terminado con la planeación y diagnostico estratégico de su empresa:
Recuerde que puede expórtalo en formato Word o Pdf.</p>
</div>
<!--<a href="{{route('vista2-2')}} " style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>-->
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
				<p class="parrafoInfoMod3">
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





        $(document).ready(function () {
            $('.items3 li:nth-child(2)').addClass("acti3");
            $('.items3 li').click(function () {
                $('.items3 li').removeClass("acti3");
                $(this).addClass("acti3");


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
