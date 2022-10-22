<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style_navbar.css">
    <title>TESTEO 1</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Script para expansión de la Barra de Navegación -->
    <script>
        $(document).ready(function() {
            $(".menu").click(function() {
                $(".keep").toggleClass("width");
            });
        });
    </script>

</head>

<body>
<?php require_once("controlador/Controlador_PerfilUsuario.php"); ?>

    <header>
        <span class="menu"><i class="material-icons">menu</i></span>
    </header>
    <aside class="keep">
        <ul>
            <li>
                <a>
                </a>
            </li>
            <li>
                <a class="message" href="index.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-inicio.svg" alt="Inicio" width="30" height="30"></span>
                    Inicio
                </a>
            </li>
            <li>
                <a class="message" href="PAGINA_GestionUsuarios.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-usuario2.svg" alt="Usuarios" width="30" height="30"></span>
                    Usuarios
                </a>
            </li>
            <li>
                <a class="message" href="PAGINA_GestionProductos.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-producto.svg" alt="Productos" width="30" height="30"></span> Productos
                </a>
            </li>
            <li>
                <a class="message" href="PAGINA_GestionProveedores.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-proveedor.svg" alt="Proveedores" width="30" height="30"></span>
                    Proveedores
                </a>
            </li>
            <li>
                <a class="message" href="PAGINA_GestionMesas.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-mesa2.png" alt="Mesas" width="30" height="30"></span>
                    Mesas
                </a>
            </li>
            <li>
                <a class="message" href="PAGINA_GestionReservas.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-reserva.svg" alt="Reservas" width="30" height="30"></span>
                    Reservas
                </a>
            </li>
            <li>
                <a class="message" href="/" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-comanda.svg" alt="Comandas" width="30" height="30"></span>
                    Comandas
                </a>
            </li>
            <li>
                <a class="message" href="/" style="text-decoration:none">
                    <span><i class="material-icons">event</i></span>
                    event
                </a>
            </li>
            <li>
                <a class="message" href="/" style="text-decoration:none">
                    <span><i class="material-icons">restaurant_menu</i></span>
                    Restaurant
                </a>
            </li>
            <li>

                <a class="message" href="ModificarPerfil_pagina.php?id=<?php echo $id_perfil ?>" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-ajuste.svg" alt="Configuración" width="30" height="30"></span>
                    Configuración
                </a>
            </li>
            <li>
                <a class="message" href="controlador/Logout.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-salir.svg" alt="Logout" width="30" height="30"></span>
                    Logout
                </a>
            </li>
        </ul>
    </aside>



</body>

</html>