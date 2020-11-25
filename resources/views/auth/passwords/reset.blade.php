@extends('layouts.app')

@section('content')

<div class="justify-content-center bajar">

    <div class="contenedor">
        {{-- contenido del modal --}}
        <div class="card-content" id='' >
            {{-- encabezado del modal --}}
                <div class="card-header text-center">
                    <h4 id="recuperar" class="card-tittle">{{ __('Restablecer tu contraseña') }}</h4>
                    <a href="{{ route('index') }}/#login" class="close icon-undo2" style="color:white;margin-left: 93% !important;"></a>
                    <hr id="linea">
                </div>
            {{-- fin contenido del modal --}}
                {{-- prueba --}}
            <div class="card-body">
            <br>
                <form id="formatoreset" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <div id="texto" class="col-md-10">
                        <p>Porfavor ingresa una nueva contraseña.
                        </p>
                    </div>
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="col-md-12">
                        <div id="resetemail" class="inner-addon left-addon">
                            <i id="emails" class="glyphicon icon-envelop" ></i>
                            <input  type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" placeholder="Correo Electronico" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- INPUT PASSWORD --}}
                        <br>
                        <div class="col-md-12">
                        <div class="inner-addon left-addon">
                            <i class="glyphicon icon-lock" style="color:black"></i>
                            <input id="passwords" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Contraseña" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                        {{-- CONFIRM PASSWORD --}}
                        <br>
                        <!-- Correcioninicio -->
                        <div class="col-md-12">
                        <div class="inner-addon left-addon">
                            <i class="glyphicon icon-lock" style="color:black"></i>
                            <input id="passwords" type="password" class="form-control"
                            name="password_confirmation" placeholder="Contraseña" required autocomplete="new-password">
                        </div>
                    </div>
                        <div class="form-group row mb-0">
                            <div class="text-center mt-2" style="margin-left: 16rem;">
                                <button id="enviarreset" class="btn btn-planeem"> {{ __('Restablecer Contraseña') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
/*Correcioninicio*/
    .bajar{
        margin-top:5%;
    }
    #texto{
        color:white;
        font-size: 1rem;
    }
    #recuperar{
        color:white;
    }
    body{
        background-image: url("/img/fondologo.jpg");
        background-size: 100%;
    }
    #recuperar{
        font-size: 1.4rem;
        text-align: left !important;
        margin-left: 8%;
        width: 38%;
        margin-top: 0%;
        margin-bottom: -4%;
    }
    #resetemail{
        margin-left: 0rem;
    }
    #formatoreset{
        margin: 3.8rem;
    }
    .card-body{
        margin-top: -4rem;
        padding: 0.25rem;
    }

    /*Correcioninicio*/
    #enviarreset{
        border-radius: 0.6rem;
        height: 55px;
        padding: 7px;
        margin-left: 28rem;
        width: 100px;
        color: white;
        margin-top: -90px;
    }
    /*Correcioninicio*/
    .card-content{
        width: 97%;
        height: auto;
        background-color: #238276;
        border-radius: 20px;
    }
    .card-header{
        border-top-left-radius: .125rem ;
        border-top-right-radius: .125rem;
        border-bottom: none;
        background-color: #238276;
        border-radius: 20px !important;
        margin-top: 1rem;

    }
    #linea{
        background-color: white;
        width: 17%;
        margin-right: 39%;
        position: absolute;
        margin-left: -20px;
        margin-top: 12px;
    }
    /*Correcioninicio*/
    #passwords{
        margin-left: -17px;
        width: 88%;
    }
    i{
        margin-left: -14px;
    }
    #emails{
        color:black;
        margin-left: -1px;
    }

    @media (max-width: 1024px) {

        #enviarreset{
        margin-left: 13rem;
    }

    }

    @media (max-width: 720px) {

    #passwords{
        margin-left: -17px;
    }

    #enviarreset{
        margin-left: -327px;
        width: 147px;
        margin-top: 0px;
    }

        /*Correcioninicio*/
.bajar{
    margin-top:14%;
}

}


    </style>
@endsection
