@extends('layouts.nav4')

@section('content')

<header>
    @yield('js')
    @section('f')
    <a href="{{ route('vista2') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
    @endsection

    <div class="containerTituloestraMod3">
        <h2 class="tituloestraMod3">Indicadores de Objetivos</h2>
        <img class="imgdiagnosticoMod3" src="img/modulo4.png">
    </div>
    <br>
    <div class="parrafoMod3">
        <p>Un indicador es una característica específica, observable y medible que puede ser usada para mostrar los
            cambios y progresos que está haciendo un programa hacia el logro de un resultado específico. Es decir, se trata
            de una escala que permitirá medir el grado de alcance de la meta prevista. Con el objetivo de aportar a la
            empresa un camino correcto para que ésta logre cumplir con las metas establecidas
            A continuación, encontrara los objetivos diseñados en los pasos anteriores y una opción didáctica para que le
            asigne un indicador a cada uno con el fin de llevar un seguimiento y control en la ejecución de del cumplimiento
            de estos.</p>
    </div>
    <div class="containerBtnsMod3">
        <a href="{{route('vista1-2')}} " name="nuevo" class="siguienteMod3 Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
    </div>

    <!--<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>-->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
                    <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

                </div>
                <!--<div class="modal-body">
					<p>
                        A continuación, verá una explicación simple y unos ejemplos de cómo se estructuran los indicadores. Para ello es
                        importante conocer los siguientes pasos.
                        <br/>
                        1. Identificar el objetivo que se quiere medir/ cuantificar.
                        <br/>
                        2. Definir la tipología del indicador.
                        <br/>
                        3. Construir el indicador.
                        <br/>
                        <br/>
                        Para construir el indicador debes tener en cuenta sus partes: Variable + índice + Frecuencia
                        <br/>
                        La variable: Es la unidad de medida contrastada.
                        <br/>
                        Puede ser de tipo cuantitativo o cualitativo.
                        <br/>
                        Algunos ejemplos típicos son: tiempo, costos, crecimiento, cubrimiento, productividad.
                        <br/>
                        El índice: es la ecuación o fórmula de cálculo.
                        <br/>
                        Algunos ejemplos:
                        <br/>
                        Variable = Logros alcanzados / Logros planeados.
                        <br/>
                        Variable = Parte / Todo
                        <br/>
                        Variable = Real / Propuesto
                        <br/>
                        Variable = Actual / Anterior
                        <br/>
                        La frecuencia: Es la definición de cada cuanto tiempo se ha de medir. Diario, semanal, mensual, etc. Es
                        importante tener presente que no todos los indicadores se miden en los mismos periodos de tiempo. Lo que para
                        unos es normal para otros es excesivo.
                        <br/>
                        Ejemplo de un indicador
                        <br/>
                        1. Objetivo: Diversificar el modelo de negocio actual. (Objetivo Estratégico) Tipo
                        Indicador: Diversificación: Logros Alcanzados * 100
                        Logros Planeados
                        <br/>
                        2. Objetivo: Comercializar los productos de manera online. (Objetivo Táctico)
                        Indicador: Comercialización online: Cantidad de productos comercializados online * 100
                        Cantidad de productos
                        <br/>
                        3. Objetivo: Reducir los tiempos de respuesta al cliente. (Objetivo Operacional)
                        Indicador: Tiempos de respuesta: Tiempos de respuesta periodo actual * 100
                        Tiempos de respuesta periodo anterior
					</p>
				</div>-->
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