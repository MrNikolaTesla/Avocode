<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Rancho&display=swap');

    :root {
      --primary: #094b65;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      overflow-x: hidden;
      background: #fff;
      min-height: 100vh;
      background-image: url("assets/burger.png");
      background-size: cover;

    }

    #header {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      padding: 30px 100px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 100;
    }


    #header ul {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #header ul li {
      list-style: none;
      margin-left: 20px;
    }

    #header ul li a {
      text-decoration: none;
      padding: 6px 15px;
      color: white;
      border-radius: 20px;
    }

    #header ul li a:hover,
    #header ul li a.active {
      background: var(--primary);
      color: #fff;
    }

    section {
      position: relative;
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    section::before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100px;
      z-index: 10;
    }

    section img {
      position: absolute;
      top: 0px;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      pointer-events: none;
    }

    section #text {
      position: absolute;
      color: white;
      font-size: 120px;
      text-align: center;
      line-height: 10px;
      font-family: 'Rancho', cursive;
      transform: translatey(-50%);
    }

    section #text span {
      font-size: 10px;
      letter-spacing: 2px;
      font-weight: 400;
    }

    #btn {
      text-decoration: none;
      display: inline-block;
      padding: 8px 30px;
      background: #fff;
      color: var(--primary);
      font-size: 1.2em;
      font-weight: 500;
      letter-spacing: 2px;
      border-radius: 40px;
      transform: translatey(100px);
    }

    .sec {
      position: relative;
      padding: 100px;
      background: var(--primary);
    }

    .sec h2 {
      font-size: 3.5em;
      color: #fff;
      margin-bottom: 10px;
    }

    .sec p {
      font-size: 1em;
      color: #fff;
    }

    footer {
      position: relative;
      padding: 0px 100px;
      background: var(--primary);
    }

    footer a {
      text-decoration: none;
      color: white;
    }

    /*footer*/
    .site-footer {
      background-color: #161617;
      padding: 10px 0 20px;
      font-size: 15px;
      line-height: 24px;
      color: #737373;
      text-align: center;

    }

    .site-footer a {
      color: #737373;
    }

    .site-footer a:hover {
      color: #3366cc;
      text-decoration: none;

    }

    .copyright-text {
      margin: 0
    }
  </style>
</head>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


<body>
  <header id="header">
    <img src="assets/logo.jpg" alt="LOGO BURGERFACTORY" />
    <ul>
      <li><a href="#" class="active">Inicio</a></li>
      <li><a href="#">Cartilla</a></li>
      <li><a href="#">Edición Limitada</a></li>
      <li><a href="#">Sobre nosotros</a></li>
      <li><a href="#">Contacto</a></li>
      <li><a href="pagina/FormularioInicioSesion.php">Iniciar Sesión</a></li>
      <li><a href="pagina/FormularioRegistroCliente.php">Registrar</a></li>
    </ul>
  </header>

  <Section>
    <h2 id="text"><br>Es momento de darse un gusto</h2>


    <a href="#" id="btn">Explorar</a>

  </Section>

  <footer class="site-footer">
    <div class="container">
      <div class="row">

        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 Todos los Derechos Reservados
              <a href="#">Avocode</a>.
            </p>
          </div>

        </div>
      </div>
  </footer>

</body>

</html>