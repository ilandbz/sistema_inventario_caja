@extends('layouts.master')

@section('content')
<form action="{{ route('productos.store')}}" method="POST">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h6 class="card-title">
                        Nuevo Producto
                    </h6>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">Nombre</label>
                        <div class="col-md-9 mb-1">
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror"  name="nombre"
                                value="{{ old('nombre') }}" autocomplete="nombre" placeholder="Ingrese Nombre de Producto"/>
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
                                value="{{ old('precio') }}" autocomplete="precio" placeholder="0.00" min="0.01"/>
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
                                value="{{ old('cantidad') }}" autocomplete="cantidad" placeholder="0"/>
                            @error('cantidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">Categoria</label>
                        <div class="col-md-5 mb-1">
                            <select name="categoria_id" id="categoria_id" class="form-control @error('cateoria_id') is-invalid @enderror">
                                <option value="" disabled selected>Seleccione</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                @endforeach
                            </select>
                            @error('categoria_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-form-label-sm col-md-3 font-weight-bold">Tipo Productos</label>
                        <div class="col-md-5 mb-1">
                            <select name="tipo_id" id="tipo_id" class="form-control @error('tipo_id') is-invalid @enderror">
                                <option value="" disabled selected>Seleccione</option>
                                @foreach ($tipo_productos as $tipoproducto)
                                    <option value="{{$tipoproducto->id}}">{{$tipoproducto->nombre}}</option>
                                @endforeach
                            </select>
                            @error('categoria_id')
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
                                value="{{ old('fecha_vencimiento') }}" autocomplete="fecha_vencimiento" />
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
                                <i class="far fa-save"></i> Guarcar
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
@section('scripts')
@include('almacen.producto.script')
@endsection