@extends('layouts.master')

@section('content')
<form action="{{ route('productos.update', $producto->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h6 class="card-title">
                        Editar Producto
                    </h6>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">Nombre</label>
                        <div class="col-md-9 mb-1">
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror"  name="nombre"
                                value="{{ $producto->nombre }}" autocomplete="nombre" placeholder="Ingrese Nombre de Producto"/>
                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">Precio</label>
                        <div class="col-md-5 mb-1">
                            <input type="text" class="form-control @error('precio') is-invalid @enderror"  name="precio"
                                value="{{ $producto->precio }}" autocomplete="precio" placeholder="0.00" min="0.01"/>
                            @error('precio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">Stock</label>
                        <div class="col-md-5 mb-1">
                            <input type="number" class="form-control @error('cantidad') is-invalid @enderror"  name="cantidad"
                                value="{{ $producto->cantidad }}" autocomplete="cantidad" placeholder="0"/>
                            @error('cantidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">Fecha Vence</label>
                        <div class="col-md-5 mb-1">
                            <input type="date" class="form-control @error('fecha_vencimiento') is-invalid @enderror"  name="fecha_vencimiento"
                                value="{{ $producto->fecha_vencimiento }}" autocomplete="fecha_vencimiento" />
                            @error('fecha_vencimiento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success ms-1">
                                <i class="far fa-save"></i> Modificar
                            </button>
                            <a href="{{ route('productos.index')}}"  class="btn btn-danger">
                                <i class="fas fa-times"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
