@extends('layouts.master')

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
        <h6 class="card-title font-weight-bold">
           Historial Caja
        </h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 mb-1">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Fecha Apertura</th>
                                <th class="text-center">Monto Apertura</th>
                                <th class="text-center">Fecha Cierre</th>
                                <th class="text-center">Monto Cierre</th>
                                <th class="text-center">Estado</th>
                                {{-- <th class="text-center">Acciones</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($historial_cajas as  $historial)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{($historial->fecha_apertura) ? \Carbon\Carbon::parse($historial->fecha_apertura)->format('d/m/Y H:i:s') : "" }}</td>
                                <td class="text-center">{{ $historial->monto_apertura }}</td>
                                <td class="text-center">{{($historial->fecha_cierre) ? \Carbon\Carbon::parse($historial->fecha_cierre)->format('d/m/Y H:i:s') : "" }}</td>
                                <td class="text-center">{{$historial->monto_cierre}}</td>
                                <td class="text-center">
                                    @if($historial->estado == 0)
                                    <span class="badge bg-success text-white" >Abierta</span>
                                    @elseif ($historial->estado == 1)
                                    <span class="badge bg-secondary text-white" >Cerrada</span>
                                    @endif
                                </td>
                                {{-- <td>
                                    <a  class="btn btn-sm btn-warning" href="{{ route("productos.edit",$producto) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a  class="btn btn-sm btn-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form').submit();">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <form id="delete-form" action="{{ route('producto.destroy',$producto) }}" method="POST" role="form" onsubmit="return confirmarEliminar()">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td> --}}
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

