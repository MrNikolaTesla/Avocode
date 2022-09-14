<?php
require_once("../modelo/RegistroProducto_modelo.php");
require_once("../modelo/Repe_Producto_modelo.php");
$registroProducto = new RegistroProducto_modelo();
$repe_producto = new Repe_Producto_modelo();
if (!empty($_POST["boton_añadir"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !($_POST["tipo"] == "null")) {

        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $tipo = $_POST["tipo"];

        $repetido = $repe_producto->get_producto($nombre, $precio, $tipo);

        if ($repetido != null) {
            $estado = 0;
        }

        if ($repetido == null) {
            $estado = $registroProducto->set_producto($nombre, $precio, $tipo);
        }

        if ($estado == 1) {
            echo '<div class="alert alert-sucess alert-dismissible fade show" role="alert">
            Producto agregado correctamente!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } else if ($repetido != null) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            El producto ya ha sido agregado al sistema previamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Alguno de los campos está vacio.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }
}

?>