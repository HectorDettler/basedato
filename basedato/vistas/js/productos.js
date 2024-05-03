$("#subirImagen").change(function () {
    let imagenProducto = this.files[0];

    //console.log(imagenProducto);

    /*=============================================
    VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
    =============================================*/
    if (
        imagenProducto["type"] != "image/jpeg" &&
        imagenProducto["type"] != "image/png"
    ) {
        $("#subirImagen").val("");
        Swal.fire({
            title: "Error al subir la imagen",
            text: "¡La imagen debe estar en formato JPG o PNG!",
            icon: "error",
            confirmButtonText: "¡Cerrar!",
        });
        /*=============================================
    VALIDAMOS EL TAMAÑO DE LA IMAGEN
    =============================================*/
    } else if (imagenProducto["size"] > 1000000) {
        $("#subirImagen").val("");
        Swal.fire({
            title: "Error al subir la imagen",
            text: "¡La imagen no debe pesar más de 1MB!",
            icon: "error",
            confirmButtonText: "¡Cerrar!",
        });

        /*=============================================
    PREVISUALIZAR IMAGEN
    =============================================*/
    } else {
        let datosImagen = new FileReader();
        datosImagen.readAsDataURL(imagenProducto);
        $(datosImagen).on("load", function (event) {
            let rutaImagen = event.target.result;
            $(".previsualizarImagen").attr("src", rutaImagen);
        });
    }
});
