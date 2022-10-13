<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <!--BOOTSTRAP CSS PRINCIPAL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Vista de Productos</title>
    <link rel="stylesheet" href="assets/styles2.css">
    <!-- Recursos Misceláneos (Bootstrap CSS, Tipografías, CSS variado) -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Search Box -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            // Animate select box length
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
        // Confirmación de eliminar usuario, funciona cada vez que se quiere eliminar un usuario
        function asegurar() {
            rc = confirm("¿Seguro que desea Eliminar este producto?");
            return rc;
        }
    </script>

    <!-- JAVASCRIPT DE SWEETALERT SIN USO ACTUALMENTE -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                        </form>
                        <!-- CUERPO DE TABLA -->
                        <tbody>
                            <?php foreach ($matrizProducto as $producto) : ?>
                                <tr>
                                    <th scope="row"><?php echo $producto['id_articulo'] ?></th>
                                    <?php $dir_imagen = "assets/Productos/id" . $producto['id_articulo'] . ".png"; ?>
                                    <th><img src="<?php echo $dir_imagen; ?>" alt="Imagen" width="120" height="80"></th>
                                    <td><?php echo $producto['nombre'] ?></td>
                                    <td><?php echo $producto['precio'] ?></td>
                                    <td><?php echo $producto['tipo'] ?></td>
                                    <td>
                                        <a href="ModificarProducto_pagina.php?id=<?php echo $producto['id_articulo'] ?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                        <a href="controlador/eliminar_Producto_controlador.php?id=<?php echo $producto['id_articulo'] ?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons" onclick="javascript:return asegurar();">&#xE872;</i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        </table>

                        <!-- Regreso al inicio -->
                        <div><button type="submit" class="button-2"><a href="menu_principal.php" style="color:white;">Regresar al inicio</a></button></div>

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