@extends('layouts.app')
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function mostrar(id) {

    if (id == "Licenciatura") {
        $("#licenciatura").show();
        $("#posgrado").hide();
    }

   if (id == "Posgrado") {
        $("#licenciatura").hide();
        $("#posgrado").show();
    }

   if (id == "Preparatoria") {
        $("#licenciatura").hide();
        $("#posgrado").hide();
    }

    if (id == "Seleciona una opción") {
        $("#licenciatura").hide();
        $("#posgrado").hide();
    }
}
</script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <! registro de nombre>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres(s)') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <! registro de apellido_p>
                        <div class="form-group row">
                            <label for="apellido_p" class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno') }}</label>

                            <div class="col-md-6">
                                <input id="apellido_p" type="text" class="form-control @error('apellido_p') is-invalid @enderror" name="apellido_p" value="{{ old('apellido_p') }}" required autocomplete="apellido_p" autofocus>

                                @error('apellido_p')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <! registro de apellido_m>
                        <div class="form-group row">
                            <label for="apellido_m" class="col-md-4 col-form-label text-md-right">{{ __('Apellido materno') }}</label>

                            <div class="col-md-6">
                                <input id="apellido_m" type="text" class="form-control @error('apellido_m') is-invalid @enderror" name="apellido_m" value="{{ old('apellido_m') }}" required autocomplete="apellido_m" autofocus>

                                @error('apellido_p')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <! registro de genero>
                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                            <div class="col-md-6">
                            <select id="genero" type="text" class="form-control @error('genero') is-invalid @enderror" name="genero" value="{{ old('genero') }}" required autocomplete="genero" autofocus>
                                <option>Seleciona una opción</option>
                                <option>Masculino</option>
                                <option>Femenino</option>

                            @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </select>
                            </div>
                        </div>

                         <! registro de edad>
                        <div class="form-group row">
                            <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{ old('edad') }}" required autocomplete="edad" autofocus>

                                @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <! registro de estado_c>
                        <div class="form-group row">
                            <label for="estado_c" class="col-md-4 col-form-label text-md-right">{{ __('Estado civil') }}</label>

                            <div class="col-md-6">
                            <select id="estado_c" type="text" class="form-control @error('estado_c') is-invalid @enderror" name="estado_c" value="{{ old('estado_c') }}" required autocomplete="estado_c" autofocus>
                                <option>Selecciona una opción</option>
                                <option>soltero</option>
                                <option>casado</option>

                            @error('estado_c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </select>
                            </div>
                        </div>

                        <! registro de nivel_de_interes>
                        <div class="form-group row">
                            <label for="nivel_de_interes" class="col-md-4 col-form-label text-md-right">{{ __('Nivel de interes') }}</label>

                            <div class="col-md-6">
                            <select id="nivel_de_interes" type="text" class="form-control @error('nivel_de_interes') is-invalid @enderror" name="nivel_de_interes" value="{{ old('nivel_de_interes') }}" required autocomplete="nivel_de_interes" autofocus onChange="mostrar(this.value);">
                                <option>Selecciona una opción</option>
                                <option>Preparatoria</option>
                                <option>Licenciatura</option>
                                <option>Posgrado</option>

                            @error('nivel_de_interes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </select>
                            </div>
                        </div>

                        <! registro de licenciatura>
                        <div id="licenciatura">
                            <div class="form-group row">
                                <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de licenciatura') }}</label>

                                <div class="col-md-6">
                                <select id="licenciatura1" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" value="{{ old(
                                'tipo') }}" required autocomplete="tipo" autofocus>
                                    <option>Selecciona una opción</option>
                                    <option>Lic. Derecho</option>
                                    <option>Lic. Finanazas</option>

                                @error('tipo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                </select>
                                </div>
                            </div>
                        </div>

                        <! registro de Posgrado>
                        <div id="posgrado">
                            <div class="form-group row">
                                <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de posgrado') }}</label>

                                <div class="col-md-6">
                                <select id="Posgrado1" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" value="{{ old(
                                'tipo') }}" required autocomplete="tipo" autofocus>
                                    <option>Selecciona una opción</option>
                                    <option>Mtria. Administración</option>
                                    <option>Mtria. Dirección de proyectos</option>

                                @error('tipo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                </select>
                                </div>
                            </div>
                        </div>

                        <! registro de e-mail>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!regsitro de password>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
