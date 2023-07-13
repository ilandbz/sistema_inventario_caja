<div class="modal fade" tabindex="-1" id="modal-buscar-producto"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buscar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Buscar</span>
                        <input type="text" class="form-control" placeholder="Ingrese nombre Producto"
                            aria-label="Username" aria-describedby="basic-addon1"
                            v-model="buscar" @change="buscarProducto"
                            />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class=" table table-sm table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-if="productos_buscar.length==0">
                                    <td class="text-danger text-center table-danger" colspan="5">--Productos No Registrados--</td>
                                </tr>
                                <tr v-else v-for="(prod,indice) in productos_buscar">
                                    <td v-text="indice+1"></td>
                                    <td v-text="prod.nombre"></td>
                                    <td v-text="prod.precio"></td>
                                    <td v-text="prod.cantidad"></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-success"
                                            @click.prevent="seleccionarProducto(indice)">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    >
                    <i class="fas fa-times"></i> Cancelar
                </button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
