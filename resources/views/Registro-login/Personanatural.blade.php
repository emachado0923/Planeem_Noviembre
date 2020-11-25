<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <title>Planeem</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" type="image/png" href="{{asset('img/icono.png')}}">
    <!--bootstrap css-->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <!-- mdbootstrap -->
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
    <!--[if lte IE 9]>
        <link href='{{asset('css/animations-ie-fix.css')}}' rel='stylesheet'>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{asset('js/alertifyjs/css/alertify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/alertifyjs/css/themes/default.css')}}">

</head>
<style>

</style>

<body>
    <!--barra de navegación-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <a href="#top" class="logoPlaneem d-flex justify-content-center align-items-center mr-2">
                <div class="boxSep mr-2">
                    <div class="imgLiquidFill imgLiquid">
                        <img src="{{asset('img/icono.png')}}" style="vertical-align: baseline; width: 30px; height:30px"
                        alt="logo PlaneƎm">
                    </div>
                </div>
                <h4 class="h4-responsive tituloQueEs fuenteTitulo d-flex align-items-center verde m-0">Plane<span
                    class="naranja planeem">E</span>m</h4>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link"  href="{{ route('Inicio') }}"  data-scroll href="#Inicio">Inicio 
                </span>
                </a>
                {{-- <a class="nav-item nav-link d-flex" data-scroll href="#queEs">¿Qué es <span
                    class="pl-1 d-flex align-items-center verde tituloQueEs fuenteTitulo"
                    style="margin-top: 1.5px;">Plane<span class="naranja planeem">E</span>m</span>?
                </a> --}}
                {{-- <a class="nav-item nav-link" data-scroll href="#equipoTrabajo">Aliados --}}
                </a>
                {{-- <a class="nav-item nav-link" data-scroll href="#contactos">Contáctanos --}}
                </a>
                {{-- <a class="nav-item nav-link" data-scroll href="#enlaces">Enlaces --}}
                </a>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav ml-auto mr-md-3">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }}<span class="icon-switch"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @else
                <li class="nav-item inicio">

                    <a class="nav-link" href="{{ route('login2') }}" >{{ __('Login') }}</a>
                </li>
                <li class="nav-item inicio">

                    @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('Registro') }}"
                    >Regístrate</a>
                </li>
                @endif
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
</header>

{{-- VENTANA MODAL DE INICIO SESION --}}
<div class="modal" id="staticBackdrop1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    {{-- contenido del modal --}}
    <div class="modal-content" id='ejemplo' >
        {{-- encabezado del modal --}}
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">{{ __('Login') }}</h4>
            <a class="close" data-dismiss="modal" aria-label="Close"><span class="icon-undo2"></span></a>
            <hr>
        </div>
        {{-- fin contenido del modal --}}

        <div class="modal-body">
            <br>
            <form method="POST" action="{{ route('login','#login') }}" id="asd" class="needs-validation" novalidate>
                @csrf

                <div class=" col-md-8 offset-md-2">
                    <div class=" inner-addon left-addon {{ $errors->has('login') ? ' has-error' : '' }}">
                        <i class="glyphicon icon-user " style="color:black"></i>

                        <input id="login" type="login"
                        class="form-control " name="login" value="{{ old('login') }}" placeholder="Introduce tu E-Mail o Nombre de Usuario*" required
                        autocomplete="username">

                        @if ($errors->has('login'))
                        <span class="help-block">
                            <strong>{{ $errors->first('login') }}</strong>
                        </span>
                        @endif
                    </div>

                </div>

            </div>
            <br>
            <div class="col-md-8 offset-md-2">
              <div class="inner-addon left-addon">
                <span id="locks" class="encaja icon-lock" style="color: black; z-index: 1;"></span>
                <div class="input-group">
                  <input id="passwords" type="password"
                  class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña"
                  required autocomplete="new-password">
                  <div class="input-group-append">
                    <button id="show_password" class="btn btn-primary ojo" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <br>
    <div class="">
        <div class="text-center">
            <button type="submit" class="btn btn-planeem" id="botonAcceder1">
                {{ __('Login') }}
            </button>

        </div>
            {{-- <script>
            $("#botonAcceder").on('submit',function(){
                alert("asdasd");
            });
        </script> --}}
    </div>
    <div class="">

        <div class="text-center">
             <a class="btn btn-link" href="{{ route('password.request') }}" style="color:white !important;">
        </a>

        <div class="cambiarfont">
            <a class="nav-link" data-toggle="modal" data-target="#staticBackdrop" href="{{ route('register') }}">Regístrate</a>
        </div>
    </div>
</div>
</form>
</div>
</div>
{{-- termina contenido del modal --}}
</div>
</div>



{{-- modal --}}

<div >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content cuadroregistro">
        <div class="modal-header">
          <h4 class="modal-title w-100 font-weight-bold">Persona Natural</h4>
          <!-- Correcioninicio1-1 -->
          <a class="close" href="{{ route('Registro') }}" ><span class="icon-undo2" style="color: white;"></span></a>
          <hr class="lineainicio">
      </div>
      <div class="modal-body margen">
          <form method="POST" action="{{ route('register','#registroN') }}" id="prueba" name="prueba" class="needs-validation" novalidate>
              @csrf
              {{-- CONTENDEDOR INPUTS NOMBRES-APELLIDOS --}}
              <div class="d-flex justify-content-around">
                  {{-- INPUT NOMBRES --}}
                  <div class="inner-addon left-addon formulariopersona">
                      <i class="glyphicon icon-address-book" style="color:black"></i>
                      <input   onkeypress="return soloLetras(event)" id="Nombres" type="text" 
                      class="form-control @error('nombres') is-invalid @enderror" name="nombres"
                      value="{{ old('nombres') }}" placeholder="Nombres*" required autocomplete="nombres*" >
  
                      @error('nombres')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      {{-- INPUT APELLIDOS --}}
                  </div>
                  {{-- INPUT APELLIDOS --}}
                  <div id="apellidonatural" class="inner-addon left-addon">
                      <i class="glyphicon icon-address-book" style="color:black"></i>
                      <input  onkeypress="return soloLetras(event)" id="apellidos" type="text"
                      class="form-control @error('apellidos') is-invalid @enderror"
                      name="apellidos" value="{{ old('apellidos') }}" placeholder="Apellidos*" required
                      autocomplete="apellidos" >
                      @error('apellidos')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
              </div>
              {{-- CONTENDEDOR INPUTS DOCUMENTO --}}
              <div class="d-flex justify-content-around">
                  {{-- INPUT TIPO DOCUMENTO --}}
                  <div class="md-form form-sm">
                    <div class="inner-addon left-addon formulariopersona2">
                      <i class="glyphicon icon-address-book" id="tipoDocumentos" style="color:black;"></i>
                      <select id="tipoDocumento" type="number"
                      class="form-control @error('tipoDocumento') is-invalid @enderror"
                      name="tipoDocumento" value="{{ old('tipoDocumento') }}" required
                      autocomplete="tipoDocumento" style="background-color:white;">
                      <option value="">Tipo documento</option>
                      <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                      <option value="Cedula de ciudadania">Cédula de ciudadanía</option>
                      <option value="Cedula de extranjeria">Cédula de extranjería</option>
  
                  </select>
                  @error('tipoDocumento')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
          </div>
          {{-- INPUT DOCUMENTO --}}
          <div class="inner-addon left-addon">
              <br>
              <i class="glyphicon icon-address-book" style="color:black;margin-top:0.6rem;"></i>
              <input   onkeypress="return solonumeross(event)" id="documento" type="text"
              class="form-control @error('documento') is-invalid @enderror"
              name="documento" value="{{ old('documento') }}" placeholder="Número documento*" required 
              autocomplete="documento" style="margin-top:0.6rem;">
  
              @error('documento')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
      </div>
      {{-- INPUT USUARIO Y TELEFONO --}}
      <div class="d-flex justify-content-around">
          {{-- INPUT USUARIO --}}
          <!-- Correcioninicio1-1 -->
          <div class="inner-addon left-addon formulariopersona">
              <i class="glyphicon icon-user" style="color:black"></i>
              <input onkeypress="return alfaNumerico(event)" id="username" type="text"
              class="form-control @error('username') is-invalid @enderror"
              name="username" value="{{ old('username') }}" placeholder="Usuario*" required
              autocomplete="username">
  
              @error('username')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          {{-- INPUT TELEFONO --}}
          <div class="inner-addon left-addon ">
              <i class="glyphicon icon-phone" style="color:black"></i>
              <input   onkeypress="return solonumeross(event)" id="telefonos" type="text"
              class="form-control @error('telefono') is-invalid @enderror"
              name="telefono" placeholder="Telefono" value="{{ old('telefono') }}"
              >
              @error('telefono')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
      </div>
      {{-- INPUT EMAIL --}}
      <br>
      <div class="col-md-12">
          <div class="inner-addon left-addon formulariopersona1">
              <i class="glyphicon icon-envelop" style="color:black"></i>
              <input id="emails" type="email"
              class="form-control @error('email') is-invalid @enderror" name="email"
              value="{{ old('email') }}" placeholder="Correo Electrónico*" required autocomplete="email">
  
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
      </div>
      {{-- INPUT PASSWORD --}}
      <br>
      <div class="col-md-12">
          <div class="inner-addon left-addon formulariopersona1">
              <i class="glyphicon icon-lock" style="color:black"></i>
              <input id="passwords" type="password"
              class="form-control @error('password') is-invalid @enderror" name="password"
              placeholder="Contraseña*" required autocomplete="new-password">
  
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
      </div>
      {{-- CONFIRM PASSWORD --}}
      <br>
      <div class="col-md-12">
          <div class="inner-addon left-addon formulariopersona1">
              <i class="glyphicon icon-lock" style="color:black"></i>
              <input id="password-confirm" type="password" class="form-control"
              name="password_confirmation" placeholder="Confirmar Contraseña*" required autocomplete="new-password">
          </div>
      </div>
      <br><br>
  
      <div class="form-check center">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required >
        <label class="form-check-label" data-toggle="modal" data-target="#terminos"><p class="aceptar" id="ejecuta2">
        Aceptar los términos y condiciones</p>
    </label>
    <div class="invalid-feedback" style="font-size: 16px !important; color: orange;">
      Por favor seleccionar Términos y Condiciones
  </div>
  </div>
  <style type="text/css">
      .aceptar:hover{
          color: #e85a13;
          cursor: pointer;
      }
  </style>
  <div class="text-center mt-2">
      <br>
      <button class="btn btn-planeem"> {{ __('Register') }} <i
          class="fas fa-sign-in-alt ml-1"></i></button>
      </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  {{-- FIN DEL MODAL DE PERSONA NATURAL --}}





{{-- termina modal de persona juridica --}}
<!-- Modal -->
<div class="modal fade" id="terminos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalTerminos">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel" style="margin: 0 auto; font-weight: bold;">Términos y Condiciones Legales de Utilización de la plataforma Planeem</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none; margin-left: 0% !important">
         <i class="icon-cancel-circle" style="color: white; font-size: 21px; cursor: pointer;"></i>
      </button>
  </div>
  <div class="modal-body">
     El SENA y SENNOVA a través de la plataforma interactiva PLANEEM   y siguiendo con la ley 1581 del año 2012, se comprometen a garantizar la protección de los derechos fundamentales referidos al buen nombre y al derecho de información, en el tratamiento de los datos personales o de cualquier otro tipo de información que sea utilizada o repose en sus bases de datos y archivos y hará uso de los mismos únicamente para los fines que se encuentra facultado, especialmente las señaladas en el título Tratamiento de la información y finalidad de los datos de la presente política y sobre la base de la ley y la normatividad vigente.
     <br>
     Mayor información: <br>
     <a href="http://www.sena.edu.co/es-co/transparencia/Documents/proteccion_datos_personales_sena_2016.pdf" class="sena" target="blank">Políticas de Privacidad y Condiciones de Uso SENA</a><br>
     <a href="http://www.sena.edu.co/es-co/Paginas/politicasCondicionesUso.aspx" target="blank" class="sena">Acuerdo 009 del 2016</a>
     <style type="text/css">
         .sena:hover{
            color: blue;
         }
         .sena{
            color: #e85a13;
            font-weight: bold;
         }
     </style>
 </div>
</div>
</div>
</div>
@yield('contenido')


















<!-- SCRIPTS (LIBRERIAS O ENLACES JAVASCIPT) -->
<!-- script libreria scroll -->
<script src="js/smooth-scroll.polyfills.min.js"></script>
<!-- font awensome (iconos)-->
<script src="js/all.js"></script>
<!-- Jquery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<!-- mdbbosstrap -->
<script src="js/mdb.min.js"></script>
<script src="js/alertifyjs/alertify.js"></script>
<!--bootstrap scripts-->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<!-- Animaciones hechas nativas -->
<script src="js/animacionesNativas.js"></script>
<!-- css3 animate -->
<script src="js/css3-animate-it.js"></script>
<!-- inicializacion del smoot coltrol(libreria para scroll)  -->
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
    new WOW().init();
</script>
<script>
    if(window.location.hash === '#login')
    {
       $('#modalRegisterForm').modal('show');
   }
   else if(window.location.hash === '#registroN')
   {
    $('#exampleModal').modal('hide');
    $('#exampleModalLong').modal('show');
}
else if(window.location.hash === '#registroJ')
{
    $('#exampleModal').modal('hide');
    $('#myModal').modal('show');
}
$('#modalRegisterForm').on('hide.bs.modal', function(){
    window.location.hash = '#';
});
$('#exampleModalLong').on('hide.bs.modal', function(){
    window.location.hash = '#';
});
$('#myModal').on('hide.bs.modal', function(){
    window.location.hash = '#';
});



</script>
<style>
    .modal{
        color: white !important;
        background-image: url("img/fondoLogo.jpg") !important;
        margin-top: -1%;
        height: 100vh;
        width: 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
      }
      form.classList.add('was-validated');
  }, false);
  });
}, false);
})();
</script>
<style>
    .btn-primary{
        background-color: #0AB5A0 !important;
    }
    .modal{
     overflow-y:hidden;

 }
 .ojo{
    position: absolute;
    margin-left: 0;
    margin-top: 0px;
    height: 42px;
    padding: 10px 11px;
}
.encaja{
    position: absolute;
    padding: 14px;
    pointer-events: none !important;
    z-index: 1;
}
</style>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function mostrarPassword(){
        var cambio = document.getElementById("passwords");
        if(cambio.type == "password"){
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');

        }
    }

    $(document).ready(function () {
    //CheckBox mostrar contraseña
    $('#ShowPassword').click(function () {
        $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
    });
});
</script>

<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

<script>
        function alfaNumerico(e){
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz1234567890";
            especiales = "8-37-39-46";

            tecla_especial = false
            for(var i in especiales){
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }

            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                return false;
            }
        }
</script>


<script>
      
    function solonumeross(e){
        key=e.keyCode || e.which;
    
        tecaldo = String.fromCharCode(key);
    
        numero="01234567890"
    
        especiales="8-37-38-46.,";
    
        teclado_especial=false;
    
    
        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
            }
        }
    
        if(numero.indexOf(tecaldo)==-1 && !teclado_especial){
            return false;
        }
    }
        </script>
        <script>
                function comprobarClave(){
                    passwords = document.prueba1.passwords.value
                    password-confirm = document.prueba1.password-confirm.value

                    if (passwords == password-confirm)
                    alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo")
                    else
                    alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo")
                }
        </script>


</body>

</html>

<style>
    .icon-switch{
        padding-left: 8px;
    }
    body{
        background-image: url({{asset('img/fondoLogo.jpg')}}) !important;
    }
    .collapsing{
        margin-top: -20px;
    }
        
.lineainicio {
    margin-top: 36px;
}

@media (max-width: 720px) {

.lineainicio {
    margin-top: 70px;
}

}

.margen {
    margin-top:20px;
}

    </style>