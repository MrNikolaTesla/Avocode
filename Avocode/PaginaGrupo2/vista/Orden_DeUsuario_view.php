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
                        </div>
                        <div class="col-xs-4">
                            <h2 class="text-center">Tus <b>Ordenes : </b></h2>
                        </div>
                        <!------------------------------------------------------------------------------->

                        <!-- COMIENZO DEL FORMULARIO DE PROVEEDORES -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Numero de Orden</th>
                                    <th>Numero de Mesa</th>
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
                                <?php $numero_orden =1; foreach ($matrizOrden as $orden) : ?>
                                    <tr>
                                        <td scope="row"><?php echo $numero_orden ?></td>
                                        <td><?php echo $orden['mesa_orden'] ?></td>
                                        <td><?php echo $orden['tipo_orden'] ?></td>
                                        <td><?php echo $orden['hora'] ?></td>
                                        <td><?php echo $orden['direccion'] ?></td>
                                        <td><?php echo $orden['fecha'] ?></td>
                                        <td><?php echo $orden['observacion'] ?></td>
                                        <td><?php if($orden['estado_orden'] == "Generandose..."){
                                                  echo "Sin completar";
                                        }else{
                                            echo $orden['estado_orden'] ?></td><?php
                                        } ?>
                                        
                                        <td>
                                            <!--<a href="ModificarProveedor_pagina.php?id= echo $proveedor['id_proveedor'] " class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>-->
                                            <a href="VerProductos_DeTuOrden_pagina.php?id=<?php echo $orden['id_orden'] ?>" title="Informacion de la Orden"><img src="assets/iconos/icono-lupa.svg"></a>
                                        </td>
                                    </tr>
                                <?php  $numero_orden = $numero_orden + 1; endforeach; ?>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
</body>

</html>