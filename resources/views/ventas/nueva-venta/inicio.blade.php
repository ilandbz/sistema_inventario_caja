@extends('layouts.master')

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header">
        <h6 class="card-title">
            Nueva Venta
        </h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-1  bg-dark text-success">
                        <div class="row">
                            <div class="col-md-12 text-center fs-1">
                                @{{ 'S/ '+total_pagar.toFixed(2)}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-primary text-white p-1">
                                        <h5 class="card-title">Buscar producto</h5>
                                    </div>
                                    <div class="card-body">
                                        <button @click.prevent="mdlBuscarProducto">Buscar Producto</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-danger text-white p-1">
                                        <h5 class="card-title">Venta Productos</h5>
                                    </div>
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('ventas.nueva-venta.buscar-producto')

@endsection

@section('scripts')
@include('ventas.nueva-venta.script')
@endsection
