<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles2.css">
    <title>Vista de Reserva</title>
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
            rc = confirm("¿Seguro que desea Eliminar esta reserva?");
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
                            <h2 class="text-center">Listado de <b>Reservas</b></h2>
                        </div>
                        <!------------------------------------------------------------------------------->

                        <!-- DIV DE BÚSQUEDA-->
                        <?php require_once("vista/buscar_reserva_view.php"); ?>
                        <!------------------------------------------------------------------------------->
                        <!-- Cabeza de la tabla -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Numero de Mesa<i class="fa fa-sort"></i></th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>ID Usuario (Propietario)</th>
                                    <th>Nombre</th>
                                    <th>ID Usuario (Creador de la Reserva)</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <!-- CUERPO DE TABLA -->
                            <tbody>
                                <?php foreach ($matrizReserva as $reserva) : ?>
                                    <tr>
                                        <?php $_SESSION['cliente_reserva'] = $reserva['cliente'];
                                        if($reserva['empleado'] != null){
                                            $_SESSION['empleado_reserva'] = $reserva['empleado'];
                                            require("controlador/Controlador_Nombre_Empleado_Reserva.php");
                                        }else{
                                            $_SESSION['empleado_reserva'] = null;
                                        }
                                        require("controlador/Controlador_Nombre_Cliente_Reserva.php");
                                        ?>
                                        <td scope="row"><?php echo $reserva['id_reserva'] ?></td>
                                        <td><?php echo $reserva['mesa'] ?></td>
                                        <td><?php echo $reserva['fecha'] ?></td>
                                        <td><?php echo $reserva['hora'] ?></td>
                                        <td><?php echo $reserva['cliente']; ?></td>
                                        <td><?php echo $_SESSION['cliente_reserva'] ?></td>
                                        <td><?php echo $reserva['empleado'] ?></td>
                                        <td><?php echo $_SESSION['empleado_reserva'] ?></td>

                                        <td>
                                            <a href="ModificarReserva_pagina.php?id=<?php echo $reserva['id_reserva'] ?>" title="Editar"><img src="assets/iconos/icono-editar-2.svg"></a>
                                            <a href="controlador/eliminar_Reserva_controlador.php?id=<?php echo $reserva['id_reserva'] ?>" title="Eliminar" onclick="javascript:return asegurar();"><img src="assets/iconos/icono-papelera.svg"></a>
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
        </div>
    </div>
</body>

</html>