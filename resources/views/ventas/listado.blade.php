@extends('layouts.master')

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
        <h6 class="card-title">
            Listado de Ventas
        </h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class=" table table-sm ">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Fecha/Hora</th>
                            <th>Usuario</th>
                            <th>Sub Total</th>
                            <th>Igv</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($ventas as $venta)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$venta->fecha_venta}}</td>
                            <td>{{$venta->user->name}}</td>
                            <td>{{$venta->sub_total}}</td>
                            <td>{{$venta->igv}}</td>
                            <td>{{$venta->total}}</td>
                            <td>
                                @switch($venta->estado)
                                    @case(1)
                                    <span class="badge bg-success">Activo</span>
                                        @break
                                    @case(0)
                                    <span class="badge bg-danger">Anulado</span>
                                        @break
                                    @default

                                @endswitch
                            </td>
                            <td>
                                @if($venta->estado==1)
                                <button type="button" class="btn btn-sm btn-warning" title="Ver Ticket" @click="verTicket({{$venta->id}})">
                                    <i class="fas fa-ticket"></i>
                                </button>&nbsp;
                                <button type="button" class="btn btn-sm btn-danger"
                                    title="Anular venta" @click="anularVenta({{$venta->id}})">
                                    <i class="fas fa-ban"></i>
                                </button>
                                @elseif ($venta->estado==0)
                                <button type="button" class="btn btn-sm btn-primary"
                                    title="Habilitar Venta"
                                    @click="habilitarVenta({{$venta->id}})">
                                    <i class="fas fa-check"></i>
                                </button>

                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center text-danger table-danger" colspan="7">--Ventas No registradas</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <iframe id="pdfPreview" width="100%" height="500"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {{$ventas->render()}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@include('ventas.script')
@endsection
