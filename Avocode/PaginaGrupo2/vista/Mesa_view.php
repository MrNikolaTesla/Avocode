<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles_mesas-view.css">
    <link rel="stylesheet" href="assets/styles2.css">
    <link rel="stylesheet" href="assets/styles_status.css">
    <title>Vista de Mesa</title>
    <!-- Recursos Misceláneos (Bootstrap CSS, Tipografías, CSS variado) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        // Confirmación de eliminar mesa, funciona cada vez que se quiere eliminar una mesa
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
</head>

<body>

    <!-- DIV'S CON CLASES DIFERENTES PARA EL RESPONSIVE Y DISPOSICIÓN EN LA PÁGINA -->
    <div class="container-mesa">
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

                        <!-- COMIENZO DEL FORMULARIO DE MESAS -->
                        <table class="table">

                            <!-- CUERPO DE TABLA -->
                            <tbody>
                                <div class="div-mesa">

                                    <?php foreach ($matrizMesa as $mesa) : ?>

                                        <td class="td-mesa">
                                            <?php echo $mesa['id_mesa'] ?>
                                            <a href="controlador/eliminar_mesa_controlador.php?id=<?php echo $mesa['id_mesa'] ?>" title="Eliminar" onclick="javascript:return asegurar();"><img src="assets/iconos/icono-papelera.svg"></a>
                                            <img class="img-mesa" src="assets/iconos/icono-mesa.png">
                                            <?php echo $mesa['estado'] ?>
                                            <a href="controlador/ControladorModificarMesa.php?id=<?php echo $mesa['id_mesa'] ?>" title="Cambiar estado"><img src="assets/iconos/icono-editar-2.svg"></a>
                                        </td>

                                    <?php endforeach; ?>
                                </div>

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