<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificacion de Producto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- Recursos Misceláneos (Bootstrap CSS, Tipografías, CSS variado) -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- BOOTSTRAP JAVASCRIPT -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
        <?php foreach ($producto_modificar as $producto) : 
                $dir_imagen = "assets/Productos/id".$producto['id_articulo'].".png"; ?>
                <form class="col-4" method="POST" enctype="multipart/form-data">
                        <h3 class="text-center">Modificacion de Productos</h3>
                        <?php require_once("controlador/ControladorModificarProducto.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Id - Inalterable</label>
                                <input type="text" class="form-control" name="id" value="<?php echo $producto['id_articulo'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $producto['nombre'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Precio</label>
                                <input type="number" class="form-control" name="precio" value="<?php echo $producto['precio'] ?>">
                        </div>
                        <label class="form-label">Tipo (Anteriormente: <?php echo $producto['tipo'] ?>)</label>
                        <select id="cmbMake" name="tipo">
                                <option value="hamburguesa">Hamburguesa</option>
                                <option value="bebida">Bebida</option>
                                <option value="acompanamiento">Acompañamiento</option>
                        </select>
                        <div class="mb-3">
                                <label class="form-label">Imagen</label>
                                <img src="<?php echo $dir_imagen; ?>"  alt="Imagen" width="150" height="100">
                                <br>
                                (En caso de querer modificar la imagen del producto, sube una imagen aqui: ↓)
                                <input type="file" accept="image/*" name="imagen" />
                        </div>
                        <a href="PAGINA_GestionProductos.php" class="button-2" style="color:white; text-decoration:none;">Regresar al Listado</a>
                        <button type="submit" class="button-3" name="modificacion" value="enviar">Modificar</button>
                        </div>
                        
                </form>
        <?php endforeach; ?>
</body>

</html>