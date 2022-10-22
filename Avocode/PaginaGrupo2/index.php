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

<div id="main-banner">
  <img src="assets/burger.png" alt="Girl in a jacket" width="500" height="600" alt="Burger Factory ">
</div>
<!------------------------------------------------------------------->
<?php require_once("vista/Cartilla_view.php") ?>


</body>

<!------------------------ Pie de Página ------------------------->
<footer>
  <div class="wrapper">
    <ul>
      <li>New York Restaurant</li>
      <li>3926 Anmoore Road</li>
      <li>New York, NY 10014</li>
      <li>718-749-1714</li>
    </ul>
    <ul>
      <li>France Restaurant</li>
      <li>68, rue de le Couronne</li>
      <li>75002 PARIS</li>
      <li>02.94.23.69.56</li>
    </ul>
    <ul>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <!----------------------------------------------------------->

    <!------------------------ Copyright ------------------------->
    <ul>
      <li><img src="https://image.ibb.co/iivzoF/logo_footer.png" alt="logo"></li>
      <li class="copyright-text">Copyright &copy; 2022 Todos los Derechos Reservados
        <a href="https://github.com/MrNikolaTesla/Avocode">Avocode</a>.
      </li>
    </ul>
  </div>
</footer>
<!------------------------- Fin de pie de página ---------------------------------->

</html>