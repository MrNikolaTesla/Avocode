<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles2.css">
    <link rel="stylesheet" href="assets/style_status.css">

    <!--BOOTSTRAP CSS PRINCIPAL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Vista de Mesa</title>
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
            rc = confirm("¿Seguro que desea Eliminar esta mesa?");
            return rc;
        }
        //Función para STATUS de MESAS
        $(function() {
            $('.progress>div').each(function() {
                $(this).css('width', $(this).data('progress'));
            });
        });
    </script>
    <!-- JAVASCRIPT DE SWEETALERT SIN USO ACTUALMENTE -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                            <h2 class="text-center">Listado de <b>Mesas</b></h2>
                        </div>
                        <!------------------------------------------------------------------------------->

                        <!------------------------------------------------------------------------------->
                        <!-- COMIENZO DEL FORMULARIO DE MESAS -->
                        <form method="POST">
                            <table class="table table-bordered">
                                <br>
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Estado<i class="fa fa-sort"></i></th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                        </form>

                        <!-- CUERPO DE TABLA -->
                        <tbody>
                            <?php foreach ($matrizMesa as $mesa) : ?>
                                <tr>
                                    <td scope="row"><?php echo $mesa['id_mesa'] ?></td>
                                    <td width="600">
                                        <!-- CORRELACIONAR ESTADO MESAS CON LA CLASE DIV QUE CORRESPONDA, SEGURAMENTE UTILIZANDO IF ESTADO MESA==1 ENTONCES DIV CLASS "TASK-DONE"-->
                                        <div class="clausurada"></div>
                                        <?php echo $mesa['estado'] ?>
                                    </td>
                                    <td>
                                        <a href="controlador/ControladorModificarMesa.php?id=<?php echo $mesa['id_mesa'] ?>" class="edit" title="Cambiar estado" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                        <a href="controlador/eliminar_mesa_controlador.php?id=<?php echo $mesa['id_mesa'] ?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons" onclick="javascript:return asegurar();">&#xE872;</i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        </table>
                        <!-- Regreso al inicio -->
                        <div><a href="menu_principal.php" class="button-2" style="color:white; text-decoration:none;">Regresar al inicio</a></div>
                    </div>

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