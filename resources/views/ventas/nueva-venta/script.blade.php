<script>
    const { createApp } = Vue
    createApp({
        data() {
            return {
                total_pagar:0,
                venta:{
                    user_id:'',
                    fecha_venta:'',
                    sub_total:0,
                    igv:0,
                    total:0,
                    detalles:[]
                },
                buscar:'',
                productos_buscar:[],
                detalle:{
                    id:'',
                    nombre:'',
                    precio:'',
                    cantidad:1,
                    importe:''
                }
            }
        },
        computed: {
            sumarImporte() {
                let sub_total = 0;
                let igv=0;
                let total = 0;
                this.venta.detalles.forEach(detalle => {
                    detalle.importe= detalle.cantidad*detalle.precio
                    sub_total = parseFloat(sub_total) + parseFloat(detalle.importe)
                });
                this.venta.sub_total = sub_total
                this.venta.igv = sub_total*0.18
                this.venta.total =this.venta.sub_total + this.venta.igv
                this.total_pagar = this.venta.total
            }
        },
        created(){
        },
        methods: {
            mdlBuscarProducto() {
                this.buscar ="";
                this.productos_buscar=[]
                this.detalle={
                    id:'',
                    nombre:'',
                    precio:'',
                    cantidad:1,
                    importe:''
                }
                mostrarModal('#modal-buscar-producto')
            },
            buscarProducto(event) {
                axios.get('/venta/nueva/buscar-productos',{params:{ buscar:event.target.value}})
                .then(respuesta => {
                    this.productos_buscar = respuesta.data
                })
            },
            seleccionarProducto(index)
            {
                this.detalle.id= this.productos_buscar[index].id
                this.detalle.nombre= this.productos_buscar[index].nombre
                this.detalle.precio= this.productos_buscar[index].precio
                this.detalle.cantidad= 1
                this.detalle.importe = this.productos_buscar[index].precio

                this.venta.detalles.push(this.detalle)

                this.buscar ="";
                this.productos_buscar=[]

                ocultarModal('#modal-buscar-producto')
            },
            eliminarProductoDetalle(index)
            {
                this.venta.detalles.splice(index,1);
                this.sumarImporte()
            },
            guardarVenta()
            {
                axios.post('/venta/nueva/guardar-venta',this.venta)
                .then(respuesta => {
                    let dato = respuesta.data
                    if(dato.ok == 1)
                    {
                        Toast.fire({
                            icon: 'success',
                            title: dato.mensaje
                        })
                        this.total_pagar =0;
                        this.venta={
                            user_id:'',
                            fecha_venta:'',
                            sub_total:0,
                            igv:0,
                            total:0,
                            detalles:[]
                        };
                    }
                })
            }
        }
    }).mount("#app-wrapper")
</script>
