<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <!--BOOTSTRAP CSS PRINCIPAL -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Vista de Productos</title>
    <link rel="stylesheet" href="assets/styles_cartilla.css">
    <!-- Recursos Misceláneos (Bootstrap CSS, Tipografías, CSS variado) -->
    <script>
        (function($) {

            // Menu filter
            $("#menu-filters li a").click(function() {
                $("#menu-filters li a").removeClass('active');
                $(this).addClass('active');

                var selectedFilter = $(this).data("filter");
                //  $("#menu-wrapper").fadeTo(100, 0);

                $(".menu-restaurant").fadeOut();

                setTimeout(function() {
                    $(selectedFilter).slideDown();
                    //$("#menu-wrapper").fadeTo(300, 1);
                }, 300);
            });

        })(jQuery);
    </script>
</head>

<body>
    <?php require_once("controlador/Controlador_ProductosEnTuOrden.php"); ?>
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
                        <?php require_once("vista/buscar_producto_cartilla_view.php"); ?>
                        <!------------------------------------------------------------------------------->

                        <!-- COMIENZO DEL FORMULARIO DE PRODUCTOS -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre<i class="fa fa-sort"></i></th>
                                    <th>Precio<i class="fa fa-sort"></i></th>
                                    <?php require_once("controlador/ControladorColumnaParaAgregarAOrden.php"); ?>
                                </tr>
                            </thead>
                            <!-- CUERPO DE TABLA -->
                            <tbody>


                                <!------------- COMIENZO DE MENU Y RESERVA, FALTA ADAPTAR---------------- -->

                                <section id="menu-list" class="section-padding">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-center  marb-35">
                                                <h1 class="header-h">Menu List</h1>
                                                <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                                    <br>nibh euismod tincidunt ut laoreet dolore magna aliquam.
                                                </p>

                                            </div>
                                            <div class="col-md-12 text-center" id="menu-filters">
                                                <ul>
                                                    <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
                                                    <li><a class="filter " data-filter=".breakfast">Breakfast</a></li>
                                                    <li><a class="filter" data-filter=".lunch">Lunch</a></li>
                                                    <li><a class="filter" data-filter=".dinner">Dinner</a></li>
                                                </ul>
                                            </div>
                                            <div id="menu-wrapper">
                                                <div class="breakfast menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img=".jpg">Food Item Name</a>
                                                        <span style="left:166px;right:44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>
                                                <div class="breakfast menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>

                                                <div class="breakfast menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>

                                                <div class="breakfast menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>
                                                <div class="lunch menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>

                                                <div class="lunch menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>

                                                <div class="lunch menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>

                                                <div class="lunch menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>

                                                <div class="lunch menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>
                                                <div class="dinner menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>

                                                <div class="dinner menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>

                                                <div class="dinner menu-restaurant">
                                                    <span class="clearfix">
                                                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
                                                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                                        <span class="menu-price">$20.99</span>
                                                    </span>
                                                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>

                                <section id="contact" class="section-padding">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h1 class="header-h">Make a Reservation</h1>
                                                <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                                    <br>nibh euismod tincidunt ut laoreet dolore magna aliquam.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row msg-row">
                                            <div class="col-md-4 col-sm-4 mr-15">
                                                <div class="media-2">
                                                    <div class="media-left">
                                                        <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone fa-3x"></span></div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="dark-blue regular">Phone Numbers</h4>
                                                        <p class="light-blue regular alt-p">012 345 6789 - <span class="contacts-sp">Phone Booking</span></p>
                                                    </div>
                                                </div>
                                                <div class="media-2">
                                                    <div class="media-left">
                                                        <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o fa-3x"></span></div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="dark-blue regular">Opening Hours</h4>
                                                        <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
                                                        <p class="light-blue regular alt-p">
                                                            Weekend 08:00 - 03.00
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <form action="" method="post" role="form" class="contactForm">
                                                    <div id="sendmessage">Your booking request has been sent. Thank you!</div>
                                                    <div id="errormessage"></div>
                                                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                                                        <div class="form-group label-floating is-empty">
                                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 characters" />
                                                            <div class="validation"></div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 col-sm-6 contact-form">
                                                        <div class="form-group">
                                                            <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 contact-form">
                                                        <div class="form-group">
                                                            <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 contact-form">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 contact-form">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 contact-form">
                                                        <div class="form-group label-floating is-empty">
                                                            <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                                            <div class="validation"></div>
                                                        </div>
                                                </form>
                                            </div>

                                            <div class="col-md-12 btnpad">
                                                <div class="contacts-btn-pad">
                                                    <button class="contacts-btn">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                    </section>
                    <!------------------------ FALTA ADAPTAR ------------------------------------->

                    <?php foreach ($matrizProducto as $producto) : ?>

                        <!--<form> !!!!!!!!!!!!!!!!!!!!! -->
                        <tr>
                            <?php $dir_imagen = "assets/Productos/id" . $producto['id_producto'] . ".png"; ?>
                            <th><img src="<?php echo $dir_imagen; ?>" alt="Imagen" width="120" height="80"></th>
                            <td><?php echo $producto['nombre'] ?></td>
                            <td><?php echo $producto['precio'] ?></td>
                            <?php require("controlador/ControladorBotonParaAgregarAOrden.php"); ?>
                        </tr>
                        <!--</form> !!!!!!!!!!!!!!!!!!!!!!!!!!!-->
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</html>