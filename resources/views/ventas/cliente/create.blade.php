<form @submit.prevent="guardar">
<div class="modal fade" tabindex="-1" id="modal-cliente"  tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title-cliente">Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="numero_documento" class="col-form-label col-form-label-sm col-md-3 mb-1">DNI / RUC</label>
                    <div class="col-md-9 mb-2">
                        <input type="text" class="form-control form-control-sm" name="numero_documento"
                        maxlength="15"
                            v-model="cliente.numero_documento"
                            :class="{ 'is-invalid' : errores.numero_documento}" placeholder="Número Documento Identidad"
                            >
                        <small class="text-danger" v-for="error in errores.numero_documento" :key="error">
                            @{{error }}
                        </small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nombres" class="col-form-label col-form-label-sm col-md-3 mb-1">Nombres</label>
                    <div class="col-md-9 mb-2">
                        <input type="text" class="form-control form-control-sm" name="nombres"
                            v-model="cliente.nombres"
                            :class="{ 'is-invalid' : errores.nombres}" placeholder="Ingrese Nombres"
                            >
                        <small class="text-danger" v-for="error in errores.nombres" :key="error">
                            @{{error }}
                        </small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="apellidos" class="col-form-label col-form-label-sm col-md-3 mb-1">Apellidos</label>
                    <div class="col-md-9 mb-2">
                        <input type="text" class="form-control form-control-sm" name="apellidos"
                            v-model="cliente.apellidos"
                            :class="{ 'is-invalid' : errores.apellidos}" placeholder="Número Documento Identidad"
                            >
                        <small class="text-danger" v-for="error in errores.apellidos" :key="error">
                            @{{error }}
                        </small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telefono" class="col-form-label col-form-label-sm col-md-3 mb-1">Telefono</label>
                    <div class="col-md-9 mb-2">
                        <input type="text" class="form-control form-control-sm" name="telefono"
                            v-model="cliente.telefono"
                            :class="{ 'is-invalid' : errores.telefono}" placeholder="Número Documento Identidad"
                            >
                        <small class="text-danger" v-for="error in errores.telefono" :key="error">
                            @{{error }}
                        </small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="direccion" class="col-form-label col-form-label-sm col-md-3 mb-1">Dirección</label>
                    <div class="col-md-9 mb-2">
                        <input type="text" class="form-control form-control-sm" name="direccion"
                            v-model="cliente.direccion"
                            :class="{ 'is-invalid' : errores.direccion}" placeholder="Número Documento Identidad"
                            >
                        <small class="text-danger" v-for="error in errores.direccion" :key="error">
                            @{{error }}
                        </small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-form-label col-form-label-sm col-md-3 mb-1">Email</label>
                    <div class="col-md-9 mb-2">
                        <input type="email" class="form-control form-control-sm" name="email"
                            v-model="cliente.email"
                            :class="{ 'is-invalid' : errores.email}" placeholder="Número Documento Identidad"
                            >
                        <small class="text-danger" v-for="error in errores.email" :key="error">
                            @{{error }}
                        </small>
                    </div>
                </div>
                <div class="form-group row" v-if="cliente.estado_crud!='nuevo'">
                    <label class="col-form-label col-form-label-sm col-md-3">Estado</label>
                    <div class="col-md-9">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input me-1" type="checkbox" id="customCheckbox2" v-model="cliente.es_activo" :value="cliente.es_activo">
                            <label for="customCheckbox2" class="custom-control-label">@{{ cliente.es_activo ==1 ? 'Activo' : 'Inactivo' }}</label>
                        </div>
                        <small class="text-danger" v-for="error in errores.es_activo"
                            :key="error">@{{error }}</small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save fa-fw"></i>
                    @{{ cliente.estado_crud == 'nuevo'? 'Guardar' : 'Modificar' }}
                </button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    >
                    <i class="fas fa-times"></i> Cancelar
                </button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
</form>
