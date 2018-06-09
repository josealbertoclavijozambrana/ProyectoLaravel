@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ action('PersonaController@update',$id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="NOMBRE" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ $objPersona->nombre }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ $objPersona->apellido }}" required>

                                @if ($errors->has('apellido'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="EDAD" class="col-md-4 col-form-label text-md-right">{{ __('EDAD') }}</label>

                            <div class="col-md-6">
                                <input id="edad" type="text" class="form-control{{ $errors->has('edad') ? ' is-invalid' : '' }}" value="{{$objPersona->edad}}" name="edad" required >

                                @if ($errors->has('edad'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="CIUDAD" class="col-md-4 col-form-label text-md-right">{{ __('CIUDAD') }}</label>

                            <div class="col-md-6">
                                <input id="ciudad" type="text" class="form-control" name="ciudad" value="{{$objPersona->ciudad}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="FECHA NACIMIENTO" class="col-md-4 col-form-label text-md-right">{{ __('FECHA NACIMIENTO') }}</label>

                            <div class="col-md-6">
                                <input id="fechaNacimiento" type="DATE" class="form-control" name="fechaNacimiento" value="{{$objPersona->fechaNacimiento}}" required>
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
