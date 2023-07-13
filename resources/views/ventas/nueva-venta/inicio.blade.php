@extends('layouts.master')

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header">
        <h6 class="card-title">
            Nueva Venta
        </h6>
    </div>
    <div class="card-body">
        <form action="">
            @csrf
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
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header bg-success text-white p-1">
                                            <h5 class="card-title">Detalle de Venta</h5>
                                        </div>
                                        <div class="card-body">
                                            <button class="btn btn-sm btn-primary mb-1" @click.prevent="mdlBuscarProducto">
                                                <i class="fas fa-search fa-fw"></i> Buscar Producto
                                            </button>
                                            <div class="row">
                                                <div class="col-md-12 table-responsive">
                                                    <table class=" table table-sm ">
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th>#</th>
                                                                <th style="width:10%">Cantidad</th>
                                                                <th>Producto</th>
                                                                <th>Precio</th>
                                                                <th>Importe</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr v-if="venta.detalles.length==0">
                                                                <td class="text-danger text-center table-danger" colspan="6">--Productos no seleccionados--</td>
                                                            </tr>
                                                            <tr v-else v-for="(det,indice) in venta.detalles">
                                                                <td v-text="indice+1"></td>
                                                                <td  style="width:10%">
                                                                    <input type="number"style="text-aling:center"
                                                                        v-model="det.cantidad"
                                                                        @change="sumarImporte" />
                                                                </td>
                                                                <td v-text="det.nombre"></td>
                                                                <td v-text="det.precio"></td>
                                                                <td v-text="det.importe.toFixed(2)"></td>
                                                                <td>
                                                                    <button type="button" class="btn btn-sm btn-danger"
                                                                        title="Eliminar Producto"
                                                                        @click="eliminarProductoDetalle(indice)">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td ></td>
                                                                <td ></td>
                                                                <td ></td>
                                                                <th class="font-weight-bold">Sub Total</th>
                                                                <td>@{{'S/ '+parseFloat(venta.sub_total).toFixed(2)}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td ></td>
                                                                <td ></td>
                                                                <td ></td>
                                                                <th class="font-weight-bold">I.G.V</th>
                                                                <td>@{{'S/ '+parseFloat(venta.igv).toFixed(2)}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td ></td>
                                                                <td ></td>
                                                                <td ></td>
                                                            <th class="font-weight-bold">TOTAL</th>
                                                                <td>@{{'S/ '+parseFloat(venta.total).toFixed(2)}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit"  class="btn btn-success me-1"
                                @click.prevent="guardarVenta">
                                <i class="fas fa-save"></i> Guardar
                            </button>
                            <a href="/venta/nueva" class="btn btn-danger me-1"><i class="fas fa-times"></i> cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('ventas.nueva-venta.buscar-producto')

@endsection

@section('scripts')
@include('ventas.nueva-venta.script')
@endsection
