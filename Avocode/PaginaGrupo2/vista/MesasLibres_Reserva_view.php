<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles2.css">
    <title>Vista de Mesa</title>
    <!-- Recursos Misceláneos (Bootstrap CSS, Tipografías, CSS variado) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <!-- DIV'S CON CLASES DIFERENTES PARA EL RESPONSIVE Y DISPOSICIÓN EN LA PÁGINA -->
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div>
                            <h2 class="text-center"><b>Mesas Disponibles</b></h2>
                        </div>

                        <!-- COMIENZO DEL FORMULARIO DE MESAS -->
                        <table class="table">

                            <!-- CUERPO DE TABLA -->
                            <tbody>
                                <div class="div-mesa">

                                    <?php foreach ($matrizMesa as $mesa) : ?>

                                        <td class="td-mesa">
                                            <?php echo $mesa['id_mesa'] ?>
                                            <?php echo $mesa['estado'] ?>
                                        </td>

                                    <?php endforeach; ?>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>