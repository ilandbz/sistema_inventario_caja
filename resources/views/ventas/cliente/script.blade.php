<script>
    const {
        createApp
    } = Vue
    createApp({
        data() {
            return {
                cliente:{
                    id:null,
                    numero_documento:'',
                    nombres:'',
                    apellidos:'',
                    telefono:'',
                    direccion:'',
                    email:'',
                    es_activo:1,
                    estado_crud:''
                },
                errores:[]
            }
        },
        computed: {},
        created() {},
        methods: {
            mdlNuevoCliente() {
                this.errores = [];
                this.cliente={
                    id:null,
                    numero_documento:'',
                    nombres:'',
                    apellidos:'',
                    telefono:'',
                    direccion:'',
                    email:'',
                    es_activo:1,
                    estado_crud:'nuevo'
                };
                mostrarModal('#modal-cliente')
                document.getElementById('modal-title-cliente').innerHTML = 'Nuevo cliente';
            },
            guardar() {
                if(this.cliente.estado_crud == 'nuevo')
                {
                    axios.post('cliente/guardar',this.cliente)
                    .then(respuesta => {
                        let dato = respuesta.data
                        if(dato.ok==1)
                        {
                            Toast.fire({
                                icon: 'success',
                                title: dato.mensaje
                            });
                            window.location.href="cliente"
                        }
                    })
                    .catch(error => {
                        this.errores = [];
                        if(error.response.status === 422) {
                            this.errores = error.response.data.errors
                        }
                    })
                }
                if(this.cliente.estado_crud == 'editar')
                {
                    axios.post('cliente/actualizar',this.cliente)
                    .then(respuesta => {
                        let dato = respuesta.data
                        if(dato.ok==1)
                        {
                            Toast.fire({
                                icon: 'success',
                                title: dato.mensaje
                            });
                            window.location.href="cliente"
                        }
                    })
                    .catch(error => {
                        this.errores = [];
                        if(error.response.status === 422) {
                            this.errores = error.response.data.errors
                        }
                    })
                }
            },
            mdlEditarCliente(id)
            {
                axios.get('cliente/editar',{params:{id:id}})
                .then(respuesta => {
                    let dato = respuesta.data
                    this.cliente.id = dato.id
                    this.cliente.numero_documento = dato.persona.numero_documento
                    this.cliente.nombres = dato.persona.nombres
                    this.cliente.apellidos = dato.persona.apellidos
                    this.cliente.telefono = dato.persona.telefono
                    this.cliente.direccion = dato.persona.direccion
                    this.cliente.email = dato.persona.email
                    this.cliente.es_activo = dato.es_activo == 1 ? true : false
                    this.cliente.estado_crud='editar'
                    mostrarModal('#modal-cliente')
                    document.getElementById('modal-title-cliente').innerHTML = 'Editar cliente';
                })
            },
            anularVenta(id) {
                Swal.fire({
                    icon:'question',
                    title: 'Está seguro de anular la venta?',
                    showCancelButton: true,
                    confirmButtonText: 'Si',
                    confirmButtonColor:'#198754',
                    cancelButtonText: `No`,
                    cancelButtonColor:'#dc3545'
                })
                .then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        axios.post('/venta/anular-venta',{id:id})
                        .then(respuesta => {
                            let dato = respuesta.data
                            if(dato.ok==1)
                            {
                                Toast.fire({
                                    icon: 'success',
                                    title: dato.mensaje
                                })
                                window.location.href="venta"
                            }
                        })
                    }
                })

            },
            habilitarVenta(id) {
                Swal.fire({
                    icon:'question',
                    title: 'Está seguro de habilitar la venta?',
                    showCancelButton: true,
                    confirmButtonText: 'Si',
                    confirmButtonColor:'#198754',
                    cancelButtonText: `No`,
                    cancelButtonColor:'#dc3545'
                })
                .then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        axios.post('/venta/habilitar-venta',{id:id})
                        .then(respuesta => {
                            let dato = respuesta.data
                            if(dato.ok==1)
                            {
                                Toast.fire({
                                    icon: 'success',
                                    title: dato.mensaje
                                })
                                window.location.href="venta"
                            }
                        })
                    }
                })

            }
        }
    }).mount("#app-wrapper")
</script>
