<?php

class ProductosControlador
{
    //$item -> campo de la BD (id_producto, email_usuario)
    //$valor -> valor del registro (2, pablo@pablo.com)

    //Método para traer información
    static public function ctrMostrarProductos($item, $valor)
    {
        $tabla = "productos";
        $respuesta = ProductosModelo::mdlMostrarProductos($tabla, $item, $valor);

        return $respuesta;
    }

    //Método para guardar información
    public function ctrAgregarProducto()
    {
        if (isset($_POST["nombre_producto"])) {

            $tabla = "productos"; //nombre de la tabla
            $datos = array(
                "nombre_producto" => $_POST["nombre_producto"],
                "categoria_producto" => $_POST["categoria_producto"],
                "precio_producto" => $_POST["precio_producto"],
                "estado_producto" => 1
            );

            //podemos volver a la página de datos
            $url = PlantillaControlador::url() . "productos";

            $respuesta = ProductosModelo::mdlAgregarProducto($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
                    fncSweetAlert("success","El producto se agregó correctamente", "' . $url . '"
                    );
                    </script>';
            }
        }
    }
}
