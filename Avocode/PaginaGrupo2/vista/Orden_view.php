<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles2.css">
    <title>Vista de Proveedor</title>
    <!-- Recursos Misceláneos (Bootstrap CSS, Tipografías, CSS variado) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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
            rc = confirm("¿Seguro que desea Eliminar este proveedor?");
            return rc;
        }
    </script>
</head>

<body>
    <!-- DIV'S CON CLASES DIFERENTES PARA EL RESPONSIVE Y DISPOSICIÓN EN LA PÁGINA -->
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
                            <h2 class="text-center">Listado de <b>Proveedores</b></h2>
                        </div>
                        <!------------------------------------------------------------------------------->

                        <!-- DIV DE BÚSQUEDA-->
                        <?php require_once("vista/buscar_proveedor_view.php"); ?>
                        <!------------------------------------------------------------------------------->

                        <!-- COMIENZO DEL FORMULARIO DE PROVEEDORES -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>ID Cliente</th>
                                    <th>Nombre Cliente</th>
                                    <th>ID Empleado</th>
                                    <th>Nombre Empleado</th>
                                    <th>ID Mesa</th>
                                    <th>Tipo de Orden</th>
                                    <th>Hora</th>
                                    <th>Direccion</th>
                                    <th>Fecha</th>
                                    <th>Observacion</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <!-- CUERPO DE TABLA -->
                            <tbody>
                                <?php foreach ($matrizOrden as $orden) : ?>
                                    <tr>
                                    <?php $_SESSION['cliente_orden'] = $orden['cliente_orden'];
                                        $_SESSION['empleado_orden'] = $orden['empleado_orden'];
                                        require("controlador/Controlador_Nombre_Cliente_Orden.php");
                                        require("controlador/Controlador_Nombre_Empleado_Orden.php");
                                        ?>
                                        <td scope="row"><?php echo $orden['id_orden'] ?></td>
                                        <td><?php echo $orden['cliente_orden'] ?></td>
                                        <td><?php echo $_SESSION['cliente_orden'] ?></td>
                                        <td><?php echo $orden['empleado_orden'] ?></td>
                                        <td><?php echo $_SESSION['empleado_orden'] ?></td>
                                        <td><?php echo $orden['mesa_orden'] ?></td>
                                        <td><?php echo $orden['tipo_orden'] ?></td>
                                        <td><?php echo $orden['hora'] ?></td>
                                        <td><?php echo $orden['direccion'] ?></td>
                                        <td><?php echo $orden['fecha'] ?></td>
                                        <td><?php echo $orden['observacion'] ?></td>
                                        <td><?php echo $orden['estado_orden'] ?></td>
                                        <td>
                                            <!--<a href="ModificarProveedor_pagina.php?id= echo $proveedor['id_proveedor'] " class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>-->
                                            <a href="VerOrden_pagina.php?id=<?php echo $orden['id_orden'] ?>" class="edit" title="Ver Productos" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                            <a href="controlador/eliminar_Orden_controlador.php?id=<?php echo $orden['id_orden'] ?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons" onclick="javascript:return asegurar();">&#xE872;</i></a>
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