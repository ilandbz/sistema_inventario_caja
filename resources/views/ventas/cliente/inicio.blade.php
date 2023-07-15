@extends('layouts.master')

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
        <h6 class="card-title">
            Listado de Clientes
            <button type="button" class="btn btn-danger btn-sm ml-1"
                @click="mdlNuevoCliente">
                <i class="fa fa-plus"></i>
            </button>
        </h6>
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
        <div class="row">
            <div class="col-md-12 mb-1">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">DNI/RUC</th>
                                <th class="text-center">Nombres</th>
                                <th class="text-center">Apellidos</th>
                                <th class="text-center">Telefono</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clientes as  $cliente)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $cliente->persona->numero_documento }}</td>
                                <td>{{ $cliente->persona->nombres }}</td>
                                <td>{{ $cliente->persona->apellidos }}</td>
                                <td>{{ $cliente->persona->telefono }}</td>
                                <td>
                                    @if ($cliente->es_activo==1)
                                    <span class="badge bg-success">Activo</span>
                                    @elseif ($cliente->es_activo==0)
                                    <span class="badge bg-secondary">Inactivo</span>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm"
                                        @click="mdlEditarCliente({{ $cliente->id }})">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td class="text-center tex-danger table-danger" colspan="7"> --Datos no registrados</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {{$clientes->render()}}
            </div>
        </div>
    </div>
</div>
@include('ventas.cliente.create')
@endsection

@section('scripts')
@include('ventas.cliente.script')
@endsection
