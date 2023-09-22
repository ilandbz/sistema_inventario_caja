@extends('layouts.master')

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
        <h6 class="card-title font-weight-bold">
            Movimientos de Caja en el dia
        </h6>
        <div class="card-tools">

        </div>
    </div>
    <div class="card-body">
        @if(Session::has('message'))
        <div class="row">
            <div class="col-md-7">
                <div class="alert alert-primary alert-dismissible" role="alert">
                    <div class="">{{ Session::get('message') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-sm">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Usuario</th>
                        <th class="text-center">Descripcion</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">monto</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($movimientos as $registro)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $registro->usuario->name }}</td>
                        <td class="text-center">{{ $registro->descripcion }}</td>
                        <td class="text-center">{{ $registro->tipo }}</td>
                        <td class="text-center">{{ $registro->monto }}</td>
                    </tr>
                    @empty
                        <tr>
                            <td class="text-center tex-danger table-danger" colspan="5"> --Datos no registrados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
