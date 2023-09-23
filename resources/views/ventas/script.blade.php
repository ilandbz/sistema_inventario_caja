<script>
    const {
        createApp
    } = Vue
    createApp({
        data() {
            return {

            }
        },
        computed: {},
        created() {},
        methods: {
            verTicket(ventaId) {
                axios.get(`venta/verticket?${ventaId}`, {
                    responseType: 'blob' // Indica que esperas una respuesta binaria (PDF)
                })
                .then(response => {
                    const blob = new Blob([response.data], { type: 'application/pdf' });
                    const url = window.URL.createObjectURL(blob);
                    window.open(url, '_blank');
                })
                .catch(error => {
                    console.error(error);
                });
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
