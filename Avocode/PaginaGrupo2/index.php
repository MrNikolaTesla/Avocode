<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <!--  <link rel="stylesheet" type="text/css" href="assets/styles_inicio.css"> -->

  <style>
    body {
      font-family: Georgia;
      margin: 0;
    }

    .wrapper {
      width: 100%;
      max-width: 1080px;
      padding: 0 10px;
      margin: 0 auto;
    }

    h1.logo {
      background-image: url(https://image.ibb.co/nuSZNa/logo.png);
      background-repeat: no-repeat;
      width: 100px;
      text-indent: -10000px;
      float: left;
    }

    header nav {
      float: right;
    }

    header nav h2 {
      text-indent: -10000px;
      height: 0;
      margin: 0;
    }

    header nav li {
      float: left;
      list-style-type: none;
      margin: 10px 20px;
    }

    header nav li a {
      text-decoration: none;
      color: #333;
      font-size: 18px;
    }

    #main-banner,
    #main-banner img {
      width: 100%;
    }

    #main-banner img {
      border-bottom: 6px solid #f34949;
    }

    #home-menu h2 {
      background-image: url(https://image.ibb.co/iKBuNa/menu_flag.png);
      background-repeat: no-repeat;
      width: 156px;
      height: 74px;
      text-indent: -10000px;
      margin: 0 auto;
      position: relative;
      top: -4px;
    }

    #home-menu ul {
      padding: 0;
      list-style-type: none;
    }

    #home-menu ul:after {
      content: "";
      clear: both;
      display: block;
    }

    #home-menu li {
      float: left;
      width: 42%;
      padding: 0;
      margin: 20px 0 20px 8%;
    }

    #home-menu li:nth-child(odd) {
      margin: 20px 8% 20px 0;
    }

    .dish {
      float: left;
      color: #555;
      font-weight: bold;
      position: relative;
      z-index: 1;
      background: #fff;
      padding-right: 15px;
    }

    .price {
      float: right;
      color: #555;
      font-weight: bold;
      position: relative;
      z-index: 1;
      background: #fff;
      padding-left: 15px;
    }

    .description {
      clear: both;
      display: block;
      color: #999;
      font-style: italic;
      font-size: 14px;
      padding-top: 10px;
      border-top: 1px solid #ddd;
      position: relative;
      top: -8px;
    }

    #featured {
      margin-top: 100px;
    }

    #featured ul {
      padding: 0;
    }

    #featured ul:after {
      content: "";
      display: block;
      clear: both;
    }

    #featured li {
      float: left;
      width: 23%;
      margin: 1%;
      list-style-type: none;
    }

    #featured li img {
      width: 100%;
      margin-bottom: 10px;
    }

    #featured li a {
      color: #333;
      text-decoration: none;
      float: left;
    }

    #featured li span {
      float: right;
      color: #333;
    }

    footer {
      background: #3b3b3b;
      margin-top: 100px;
      padding: 30px 0;
    }

    footer:after {
      content: "";
      display: block;
      clear: both;
    }

    footer ul {
      float: left;
      padding: 0;
      list-style-type: none;
      color: #eee;
      width: 23%;
      margin-right: 2%;
    }

    footer li {
      margin: 10px 0;
    }

    footer a {
      color: #eee;
      text-decoration: none;
    }
  </style>
  <!-- End homepage content -->

</head>

<body>
  <!--  <header id="header">
    <img src="assets/logo.png" width="140" height="140" alt="LOGO BURGERFACTORY" />
    <ul>
      <?php /* require_once("vista/ControladorPestanasCliente.php");*/ ?> 
    </ul>
  </header>

  <Section>
    <h2 id="text">Es momento de darse un gusto</h2>


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
              <a href="https://github.com/MrNikolaTesla/Avocode">Avocode</a>.
            </p>
          </div>

        </div>
      </div>
  </footer>
-->

  <header>
    <div class="wrapper">
      <h1 class="logo">Resto</h1>
      <nav>
        <h2>Main Navigation</h2>
        <ul>
          <?php require_once("vista/ControladorPestanasCliente.php") ?>

        </ul>
      </nav>
    </div>
  </header>

  <div id="main-banner">
    <img src="https://image.ibb.co/hiVAvv/banner.jpg" alt="Welcome to Resto">
  </div>

  <div class="wrapper">
    <section id="home-menu">
      <h2>Menu</h2>
      <ul>
        <li>
          <span class="dish">Voluptate cillum fugiat</span>
          <span class="price">$30</span>
          <span class="description">Cheese, tomato, mushrooms, onions</span>
        </li>
        <li>
          <span class="dish">Voluptate cillum fugiat</span>
          <span class="price">$30</span>
          <span class="description">Cheese, tomato, mushrooms, onions</span>
        </li>
        <li>
          <span class="dish">Voluptate cillum fugiat</span>
          <span class="price">$30</span>
          <span class="description">Cheese, tomato, mushrooms, onions</span>
        </li>
        <li>
          <span class="dish">Voluptate cillum fugiat</span>
          <span class="price">$30</span>
          <span class="description">Cheese, tomato, mushrooms, onions</span>
        </li>
        <li>
          <span class="dish">Voluptate cillum fugiat</span>
          <span class="price">$30</span>
          <span class="description">Cheese, tomato, mushrooms, onions</span>
        </li>
        <li>
          <span class="dish">Voluptate cillum fugiat</span>
          <span class="price">$30</span>
          <span class="description">Cheese, tomato, mushrooms, onions</span>
        </li>
        <li>
          <span class="dish">Voluptate cillum fugiat</span>
          <span class="price">$30</span>
          <span class="description">Cheese, tomato, mushrooms, onions</span>
        </li>
        <li>
          <span class="dish">Voluptate cillum fugiat</span>
          <span class="price">$30</span>
          <span class="description">Cheese, tomato, mushrooms, onions</span>
        </li>
      </ul>
    </section>

    <section id="featured">
      <ul>
        <li>
          <img src="https://image.ibb.co/ehFAvv/thumb_1.jpg">
          <a href="#">Fugiat nulla sint</a>
          <span>$30</span>
          <span class="rating"></span>
        </li>
        <li>
          <img src="https://image.ibb.co/cZaoha/thumb_2.jpg">
          <a href="#">Fugiat nulla sint</a>
          <span>$30</span>
          <span class="rating"></span>
        </li>
        <li>
          <img src="https://image.ibb.co/cKvAvv/thumb_3.jpg">
          <a href="#">Fugiat nulla sint</a>
          <span>$30</span>
          <span class="rating"></span>
        </li>
        <li>
          <img src="https://image.ibb.co/e00zoF/thumb_4.jpg">
          <a href="#">Fugiat nulla sint</a>
          <span>$30</span>
          <span class="rating"></span>
        </li>
      </ul>
    </section>
  </div>
</body>

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
    <ul>
      <li><img src="https://image.ibb.co/iivzoF/logo_footer.png" alt="logo"></li>
      <li>&copy; All Rights Reserved 2017</li>
    </ul>
  </div>
</footer>

</html>