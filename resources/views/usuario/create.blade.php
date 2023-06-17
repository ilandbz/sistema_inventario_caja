@extends('layouts.master')

@section('content')
<form action="{{ route('usuario.store')}}" method="POST">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h6 class="card-title">
                        Nuevo Usuario
                    </h6>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">Nombre</label>
                        <div class="col-md-5 mb-1">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name"
                                value="{{ old('name') }}" autocomplete="name" placeholder="Ingrese Nombre de Usuario"/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">{{ __('Email Address') }}</label>
                        <div class="col-md-5 mb-1">
                            <input type="text" class="form-control @error('email') is-invalid @enderror"  name="email"
                                value="{{ old('email') }}" placeholder="Ingrese Correo Electrónico" autocomplete="email"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">{{ __('Password') }}</label>
                        <div class="col-md-5 mb-1">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                value="{{ old('password') }}" autocomplete="password" placeholder="Ingrese Contraseña"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">{{ __('Confirm Password') }}</label>
                        <div class="col-md-5 mb-1">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                                value="{{ old('password_confirmation') }}" autocomplete="password_confirmation"
                            placeholder="Repita Contraseña"/>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success ms-1">
                                <i class="far fa-save"></i> Guarcar
                            </button>
                            <a href="{{ route('usuario.index')}}"  class="btn btn-danger">
                                <i class="fas fa-times"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
Crear usuario
@endsection
