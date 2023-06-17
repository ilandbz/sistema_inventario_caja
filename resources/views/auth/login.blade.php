@extends('layouts.login-master')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="/" class="h1"><b>Inventarios</b>S.A.</a>
    </div>
    <div class="card-body login-card-body">
        <p class="login-box-msg">Iniciar Sesi&oacute;n</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <label for="email" class="col-md-12 col-form-label">{{ __('Email Address') }}</label>
                <div class="col-md-12 mb-2">
                    <input type="email" placeholder="Ingrese Correo Electrónico" name="email"
                        class="form-control @error('email') is-invalid @enderror"
                    />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>
                <div class="col-md-12 mb-2">
                    <input type="password" placeholder="***********" name="password"
                        class="form-control @error('password') is-invalid @enderror"
                    />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                        Recordarme
                    </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Login') }}
                    </button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
</div>
@endsection
