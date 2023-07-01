<script>
    const { createApp } = Vue
    createApp({
        data() {
            return {
                total_pagar:0,
                venta:{
                    detalles:[]
                },
                detalle:{

                }
            }
        },
        computed: {
        },
        created(){
        },
        methods: {
            mdlBuscarProducto() {
                mostrarModal('#modal-buscar-producto')
            },
        }
    }).mount("#app-wrapper")
</script>
