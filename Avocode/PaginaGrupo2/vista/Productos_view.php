<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles2.css">
    <title>Vista de Productos</title>
    <!-- Recursos Misceláneos (Bootstrap CSS, Tipografías, CSS variado) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        // Casilla de Búsqueda
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            // Casilla animada
            var searchInput = $(".search-box input");
            var inputGroup = $(".search-box .input-group");
            var boxWidth = inputGroup.width();
            searchInput.focus(function() {
                inputGroup.animate({
                    width: "300"
                });
            }).blur(function() {
                inputGroup.animate({
                    width: boxWidth
                });
            });
        });
        // Confirmación de eliminar producto, funciona cada vez que se quiere eliminar un producto
        function asegurar() {
            rc = confirm("¿Seguro que desea Eliminar este producto?");
            return rc;
        }
    </script>

</head>

<body>

    <!-- DIV'S CON CLASES DIFERENTES PARA EL RESPONSIVE, DISPOSICIÓN EN LA PÁGINA -->
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-4">
                            <!------------------------------------------------------------------------------->

                            <!-- DIV DE SELECCIÓN DE ENTRADAS-->
                            <div class="show-entries">
                                <span>Mostrar</span>
                                <select>
                                    <option>5</option>
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                </select>
                                <span>entradas</span>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <h2 class="text-center">Listado de <b>Productos</b></h2>
                        </div>
                        <!------------------------------------------------------------------------------->

                        <!-- DIV DE BÚSQUEDA-->
                        <?php require_once("vista/buscar_producto_view.php"); ?>
                        <!------------------------------------------------------------------------------->

                        <!-- COMIENZO DEL FORMULARIO DE PRODUCTOS -->
                        <form method="POST">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Imagen</th>
                                        <th>Nombre<i class="fa fa-sort"></i></th>
                                        <th>Precio<i class="fa fa-sort"></i></th>
                                        <th>Tipo de Producto</th>
                                        <th>Descripcion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                        </form>
                        <!-- CUERPO DE TABLA -->
                        <tbody>
                            <?php foreach ($matrizProducto as $producto) : ?>
                                <tr>
                                    <th scope="row"><?php echo $producto['id_producto'] ?></th>
                                    <?php $dir_imagen = "assets/Productos/id" . $producto['id_producto'] . ".png"; ?>
                                    <th><img src="<?php echo $dir_imagen; ?>" alt="Imagen" width="120" height="80"></th>
                                    <td><?php echo $producto['nombre'] ?></td>
                                    <td><?php echo $producto['precio'] ?></td>
                                    <td><?php echo $producto['tipo'] ?></td>
                                    <td><?php echo $producto['descripcion'] ?></td>
                                    <td>
                                        <a href="ModificarProductoImagen_pagina.php?id=<?php echo $producto['id_producto'] ?>" title="Editar Imagen" data-toggle="tooltip"><i></i><img src="assets/iconos/icono-imagen.svg"></a>
                                        <a href="ModificarProducto_pagina.php?id=<?php echo $producto['id_producto'] ?>" class="edit" title="Editar Informacion" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                        <a href="controlador/eliminar_Producto_controlador.php?id=<?php echo $producto['id_producto'] ?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons" onclick="javascript:return asegurar();">&#xE872;</i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        </table>

                        <!-- INICIO Paginado -->
                        <div class="clearfix">
                            <div class="hint-text">Mostrando <b>5</b> de <b>25</b> entradas</div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#">Anterior</a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
                            </ul>
                        </div>
                        <!-- FIN Paginado -->

                    </div>
                </div>
            </div>
</body>

</html>