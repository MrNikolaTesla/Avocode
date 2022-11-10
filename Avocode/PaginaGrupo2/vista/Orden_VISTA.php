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
            rc = confirm("¿Seguro que desea Eliminar esta orden?");
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
                            <h2 class="text-center">Listado de <b>Ordenes</b></h2>
                        </div>
                        <!------------------------------------------------------------------------------->

                        <!-- DIV DE BÚSQUEDA-->
                        <?php require_once("vista/BUSCAR_Orden_VISTA.php"); ?>
                        <!------------------------------------------------------------------------------->

                        <!-- COMIENZO DEL FORMULARIO DE PROVEEDORES -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>ID Usuario (Propietario)</th>
                                    <th>Nombre Cliente</th>
                                    <th>ID Usuario (Creador de la Orden)</th>
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
                                        require("controlador/ORDEN_NombreCliente_CONTROLADOR.php");
                                        require("controlador/ORDEN_NombreEmpleado_CONTROLADOR.php");
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
                                            <!--<a href="PAGINA_ModificarProveedor.php?id= echo $proveedor['id_proveedor'] " class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>-->
                                            <a href="PAGINA_VerOrden.php?id=<?php echo $orden['id_orden'] ?>" title="Ver Orden"><img src="assets/iconos/icono-lupa.svg"></a>
                                            <a href="controlador/ELIMINAR_Orden_CONTROLADOR.php?id=<?php echo $orden['id_orden'] ?>" title="Eliminar" onclick="javascript:return asegurar();"><img src="assets/iconos/icono-papelera.svg"></a>
                                            <a href="controlador/ORDEN_AvanzarEstado_CONTROLADOR.php?id=<?php echo $orden['id_orden'] ?>" title="Avanzar Estado"><img src="assets/iconos/icono-flecha.svg"></a>
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