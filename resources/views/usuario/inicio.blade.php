@extends('layouts.master')

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
        <h6 class="card-title">
            Listado de Usuarios
            <a class="btn btn-danger btn-sm ml-1" href="{{route('usuario.create')}}"
            >
                <i class="fa fa-plus"></i>
            </a>
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
            <div class="col-md-7 mb-1">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Usuario</th>
                                <th class="text-center">Email</th>
                                {{-- <th class="text-center">Es Activo</th> --}}
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($usuarios as  $usuario)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <a  class="btn btn-sm btn-warning" href="{{ route("usuario.edit",$usuario) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a  class="btn btn-sm btn-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form').submit();">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <form id="delete-form" action="{{ route('usuario.destroy',$usuario) }}" method="POST" role="form" onsubmit="return confirmarEliminar()">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td class="text-cente tex-danger table-danger">--Datos no registrados</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
