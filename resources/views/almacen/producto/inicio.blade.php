@extends('layouts.master')

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
        <h6 class="card-title">
            Listado de Productos
            <a class="btn btn-danger btn-sm ml-1" href="{{route('productos.create')}}"
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
            <div class="col-md-10 mb-1">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">#</th>
                                {{-- <th>Categoría</th> --}}
                                <th class="text-center">Descripción</th>
                                <th class="text-center">Precio</th>
                                <th class="text-center">Stock</th>
                                {{-- <th class="text-center">Es Activo</th> --}}
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($productos as  $producto)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{ $producto->cantidad }}</td>
                                <td>
                                    <a  class="btn btn-sm btn-warning" href="{{ route("productos.edit",$producto) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- <a  class="btn btn-sm btn-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form').submit();">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <form id="delete-form" action="{{ route('producto.destroy',$producto) }}" method="POST" role="form" onsubmit="return confirmarEliminar()">
                                        @method('DELETE')
                                        @csrf
                                    </form> --}}
                                </td>
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
    </div>
</div>
@endsection
