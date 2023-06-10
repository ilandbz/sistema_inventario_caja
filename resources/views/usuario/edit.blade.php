@extends('layouts.master')

@section('content')
<form action="{{ route('usuario.update',$usuario->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h6 class="card-title">
                        Editar Usuario
                    </h6>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">Nombre</label>
                        <div class="col-md-5 mb-1">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name"
                            placeholder="Ingrese Nombre de Usuario" value="{{$usuario->name}}"/>
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
                                placeholder="Ingrese Correo Electrónico" value="{{$usuario->email}}"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">{{ __('Password') }}</label>
                        <div class="col-md-5 mb-1">
                            <input type="text" class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Ingrese Contraseña"/>
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
                            <input type="text" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                            :class="{ 'is-invalid' : form.errors.nombre}"
                            placeholder="Repita Contraseña"/>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div> --}}
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success ms-1">
                                <i class="far fa-save"></i> Modificar
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
