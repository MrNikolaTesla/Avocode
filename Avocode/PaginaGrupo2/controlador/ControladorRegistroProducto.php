<?php
require_once("modelo/Producto.php");
$producto = new Producto();
if (!empty($_POST["boton_añadir"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !($_POST["tipo"] == "0")) {

        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $tipo = $_POST["tipo"];

        $repetido = $producto->get_producto($nombre, $precio, $tipo);

        if ($repetido != null) {
            $estado = 0;
        }

        if ($repetido == null) {

        // ALTA DE PRODUCTO //
        $estado = $producto->set_producto($nombre, $precio, $tipo);
        // FIN DE ALTA DE PRODUCTO //

        // ------------------------------SUBIDA DE IMAGEN-------------------------------------- //

        
        }

        if ($estado == 1) {

        // MAYOR ID //
        $id = $producto->mayor_id();
        // FIN DE MAYOR ID //

        // SUBIDA DE IMAGEN //
        $producto->agregar_imagen($id);
        // FIN DE SUBIDA DE IMAGEN //

            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Producto agregado correctamente!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } else if ($repetido != null) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            El producto ya ha sido agregado al sistema previamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Alguno de los campos está vacio.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}

?>