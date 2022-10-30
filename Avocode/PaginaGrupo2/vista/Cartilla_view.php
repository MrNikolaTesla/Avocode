<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <!--BOOTSTRAP CSS PRINCIPAL -->
    <link rel="stylesheet" href="assets/styles_cartilla.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <title>Vista de Productos</title>
    <script></script>
</head>

<body>

    <!------------- COMIENZO DE CARTILLA ------------------>

    <section id="our_menu" class="pt-5 pb-5">

        <div class="container">
            <?php require_once("controlador/BtnVerMiOrden_Controlador.php"); ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="page_title text-center mb-4">
                        <h1>Cartilla Virtual</h1>
                        <div class="single_line">Seleccione el numero de productos que desee y presione + para agregar a su orden<br>
                            Despues de hacerlo, tu orden y su total aparecera en la parte inferior de esta pagina! <br>
                            <strong>No podrás realizar el pedido si no has iniciado sesión</strong>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="hamburguesas" data-toggle="tab" href="#" role="tab">Hamburguesas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="acompanamientos" data-toggle="tab" href="#" role="tab">Acompañamientos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="bebidas-postres" data-toggle="tab" href="#" role="tab">Bebidas y Postres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cervezas" data-toggle="tab" href="#" role="tab">Cervezas</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="tab-content col-lg-12" id="myTabContent">
                    <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                        <div class="row">

                            <?php foreach ($matrizProducto as $producto) : ?>
                                <div class="single_menu">
                                    <img src="<?php $dir_imagen = "assets/Productos/id" . $producto['id_producto'] . ".png"; ?><?php echo $dir_imagen; ?>" alt="burger">
                                    <div class="menu_content">
                                        <h4><?php echo $producto['nombre'] ?><span>$<?php echo $producto['precio'] ?></span></h4>
                                        <p><?php echo $producto['descripcion'] ?>
                                            <?php require("controlador/ControladorBotonParaAgregarAOrden.php") ?>

                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!---------- FIN DE CARTILLA ----------->
</body>

</html>