@extends('layouts.master')

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
        <h6 class="card-title font-weight-bold">
            Administrar Caja - Movimientos de Caja
        </h6>
        <div class="card-tools">
            <div class="btn-group">
                <button type="button" class="btn btn-tool bg-success text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-money-bill-transfer"></i> Opciones
                </button>
                <div class="dropdown-menu dropdown-menu-end" role="menu" style="">
                @if($historial_cajas)
                    {{-- <a href="#" class="dropdown-item">
                        <i class="fa-solid fa-pen fa-fw me-1"></i>Editar Monto Inicial
                    </a> --}}
                    <a href="{{ route('Cerrar Caja') }}" class="dropdown-item">
                        <i class="fa-solid fa-download fa-fw me-1"></i>Cerrar Caja
                    </a>
                @else
                    <a href="{{ route("Abrir Caja") }}" class="dropdown-item">
                        <i class="fa-solid fa-upload fa-fw me-1"></i>Abrir Caja
                    </a>
                @endif
                </div>
            </div>
            <button type="button" class="btn btn-tool" data-lte-dismiss="card-remove">
                <i class="fa-solid fa-times"></i>
            </button>
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
        <div class="row">
            <div class="col-md-6">
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            @empty($historial_cajas)
                            <td>FECHA CAJA: <b>{{  date('d/m/Y') }}</b></td>
                            <td>
                                <span class="badge text-bg-secondary font-weight-bold">CERRADA</span>
                            </td>
                            @else
                                <td>FECHA CAJA: <b>{{  date('d/m/Y') }}</b></td>
                                <td>
                                    @if($historial_cajas->estado == 0)
                                        <span class="badge text-bg-success font-w">ABIERTA</span>
                                    @else
                                        <span class="badge text-bg-dark font-w">CERRADA</span>
                                    @endif
                                </td>
                            @endempty
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-square fa-xl  fa-fw text-dark"></i> Monto Inicial
                            </td>
                            <td class="text-dark font-weight-bold">S/ @if($historial_cajas)  {{ number_format($historial_cajas->monto_apertura,2) }} @else 0.00 @endif</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-square  fa-xl fa-fw text-success"></i> Ingresos
                            </td>
                            <td class="text-success font-weight-bold">S/ 0.00 </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-square  fa-xl fa-fw text-info"></i> Gastos
                            </td>
                            <td class="text-dark font-weight-bold">S/ 0.00 </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="text-success text-center">Ingresos Totales</h5>
                            </td>
                            <td class="text-success font-weight-bold">S/ 0.00 </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="text-danger text-center">Egresos Totales</h5>
                            </td>
                            <td class="text-danger font-weight-bold">S/ 0.00 </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="text-dark text-center">Saldo</h5>
                            </td>
                            <td class="text-dark font-weight-bold">S/ 0.00 </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="text-primary text-center">Monto Inicial + Saldo</h5>
                            </td>
                            <td class="text-primary font-weight-bold">S/  @if($historial_cajas) {{ number_format($historial_cajas->monto_apertura,2)}} @else 0.00 @endif </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div>
@endsection
