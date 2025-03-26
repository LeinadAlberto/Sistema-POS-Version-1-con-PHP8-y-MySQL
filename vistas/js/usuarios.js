/* ======================================
    SUBIENDO LA FOTO DEL USUARIO
====================================== */
$('.nuevaFoto').change(function() {

    var imagen = this.files[0]; /* this: Hace referencia al elemento DOM que disparó el evento (el input file). */
                            /* .files: Es una propiedad del input file que devuelve un objeto FileList con información sobre los archivos seleccionados. */

    /* console.log('imagen', imagen[0]); */ /* Imprime en consola el objeto FileList */

    /* ==============================================================
        VALIDAMOS EL FORMATO DE LA IMAGEN PARA QUE SEA JPG O PNG
    ============================================================== */
    if (imagen['type'] != 'image/jpeg' && imagen['type'] != 'image/png') {

        $('.nuevaFoto').val('');

        swal({
            title: "Error al subir la imagen",
            text: '¡La imagen debe estar en formato JPG p PNG!',
            type: 'error',
            confirmButtonText: '¡Cerrar!'
        });

    } else if(imagen['size'] > 2097152) { // 2 MB exactos

        $('.nuevaFoto').val('');

        swal({
            title: "Error al subir la imagen",
            text: '¡La imagen no debe pesar más de 2MB!',
            type: 'error',
            confirmButtonText: '¡Cerrar!'
        });

    } else { /* previsualizar la imagen */

        var datosImagen = new FileReader();

        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on('load', function(event) {

            var rutaImagen = event.target.result;

            $('.previsualizar').attr('src', rutaImagen);

        });


    }

});