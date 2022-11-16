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
        <?php require_once("vista/Pestanas_CLIENTE_VISTA.php") ?>
        <?php require_once("vista/MENSAJE_Perfil_INDEX.php") ?>
      </ul>
    </nav>
  </div>
</header>

<!------------------------ Banner Principal ------------------------->
<?php require_once("Sliders-index.html") ?>
<!------------------------ Pie de Página ------------------------->
<footer class="index">
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
      <li><a href="PAGINA_Contacto.php">Contacto</a></li>
      <li><a href="PAGINA_SobreNosotros.php">Sobre nosotros</a></li>
      <li><a href="PAGINA_FilosofiaEmpresa.php">Filosofía de la empresa</a></li>
    </ul>
    <ul>
      <li>Martes
        De 20:00 a 23:59</li>
      <li>Miércoles
        De 20:00 a 23:59</li>
      <li> Jueves
        De 20:00 a 23:59</li>
      <li>
        Viernes
        De 20:00 a 23:59</li>
      <li> Sábado
        De 20:00 a 23:59</li>
    </ul>
    <!----------------------------------------------------------->

    <!------------------------ Copyright ------------------------->
    <ul>
      <li class="copyright-text">Copyright &copy; 2022 Todos los Derechos Reservados
        <a href="https://github.com/MrNikolaTesla/Avocode">Persea SRL</a>
        <li><img width="80" height="50" src="assets/imagenes/persea.png" alt="logo"></li>

      </li>
      
    </ul>
  </div>
</footer>
<!------------------------- Fin de pie de página ---------------------------------->

</html>