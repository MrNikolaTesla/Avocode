<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
<link rel="stylesheet" href="assets/styles_alertas.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet">
<?php require_once("vista/mensaje_gestor.php"); ?>
<form class="form-flex" method="POST">
        <h3 class="text-center2">Registro de Proveedores</h3>
        <?php require_once("controlador/ControladorRegistroProveedor.php"); ?>
        <div class="mb-3">
                <label class="form-label">Nombre/s y Apellido/s</label>
                <p><input type="text" class="tablas-input" name="nombre_apellido"></p>
        </div>
        <div class="mb-3">
                <label class="form-label">Empresa</label>
                <p><input type="text" class="tablas-input" name="empresa"></p>
        </div>
        <div class="mb-3">
                <label class="form-label">Productos</label>
                <p><input type="text" class="tablas-input" name="productos"></p>
        </div>
        <div class="mb-3">
                <label class="form-label">Telefono</label>
                <p><input type="text" class="tablas-input" name="telefono"></p>
        </div>
        <button type="submit" class="button-2" name="boton_registro" value="enviar">Enviar</button>
</form>