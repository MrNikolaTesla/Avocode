<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" type="text/css" href="assets/styles_inicio.css">
</head>

<!----------------------------- Pestañas del Cliente ------------------------------>
<header>
  <div class="wrapper">
    <img class="logo" src="assets/logo.png" alt="Burger Factory ">
    <nav>
      <h2>Principal</h2>
      <ul>
        <?php require_once("vista/ControladorPestanasCliente.php") ?>

      </ul>
    </nav>
  </div>
</header>
<!--------------------------------------------------------------------------------->

<!------------------------ Banner Principal ------------------------->
<?php require_once("Sliders-index.html") ?>

<!------------------------------------------------------------------->

</body>

<!------------------------ Pie de Página ------------------------->
<footer>
  <div class="wrapper">
    <ul>
      <li>Av. Martiniano Chiossi</li>
      <li>20100 Punta del Este</li>
      <li>Departamento de Maldonado</li>
      <li>
        <a href="https://www.google.com/maps/place/BurgerFactory/@-34.9186076,-54.9528046,15z/data=!4m2!3m1!1s0x0:0xca880886d25fb1a5?sa=X&ved=2ahUKEwjZ-tz9wvf6AhXwrJUCHZJABdEQ_BJ6BAhoEAU">
          <img width="50" height="50" src="assets/imagenes/ubication.png" alt="logo"> </a>
      </li>
    </ul>
    <ul>
      <li><a href="contacto">Contacto</a></li>
      <li><a href="sobre-nosotros">Sobre nosotros</a></li>
      <li><a href="filosofia-empresa">Filosofía de la empresa</a></li>
    </ul>
    <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>

    <!----------------------------------------------------------->

    <!------------------------ Copyright ------------------------->
    <ul>
      <li><img width="80" height="50" src="assets/imagenes/persea.png" alt="logo"></li>
      <li class="copyright-text">Copyright &copy; 2022 Todos los Derechos Reservados
        <a href="https://github.com/MrNikolaTesla/Avocode">Persea SRL</a>
      </li>
    </ul>
  </div>
</footer>
<!------------------------- Fin de pie de página ---------------------------------->

</html>