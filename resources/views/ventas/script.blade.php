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
                const url = '{{ route('ver-ticket') }}?venta_id='+ventaId;
                const params = {
                    venta_id: ventaId,
                };
                const opciones = {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/pdf',
                    },
                };
                
                //url.search = new URLSearchParams(params).toString();
                fetch(url, opciones)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error en la solicitud');
                    }
                    return response.blob();
                })
                .then(blob => {
                    const url = window.URL.createObjectURL(blob);
                    const iframe = document.getElementById('pdfPreview');
                    iframe.src = url;
                    iframe.setAttribute('sandbox', 'allow-same-origin allow-scripts');
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
