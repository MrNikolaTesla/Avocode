<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles_navbar_cartilla.css">
    <title>Barra de Navegación</title>
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
        <span class="menu"><img src="assets/iconos/icono-desplegable.svg" alt="Inicio" width="20" height="20"></span>
    </header>
    <aside class="keep">
        <ul>
            <li>
                <a class="text" href="index.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-inicio.svg" alt="Inicio" width="30" height="30"></span>
                    Inicio
                </a>
            </li>
            <li>
                <a class="text" href="PAGINA_GestionUsuarios.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-usuario2.svg" alt="Usuarios" width="30" height="30"></span>
                    Gestor de Usuarios
                </a>
            </li>
            <li>
                <a class="text" href="PAGINA_GestionProductos.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-producto.svg" alt="Productos" width="30" height="30"></span>
                    Gestor de Productos
                </a>
            </li>
            <li>
                <a class="text" href="PAGINA_GestionProveedores.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-proveedor.svg" alt="Proveedores" width="30" height="30"></span>
                    Gestor de Proveedores
                </a>
            </li>
            <li>
                <a class="text" href="PAGINA_GestionMesas.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-mesa2.png" alt="Mesas" width="30" height="30"></span>
                    Gestor de Mesas
                </a>
            </li>
            <li>
                <a class="text" href="PAGINA_GestionReservas.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-reserva.svg" alt="Reservas" width="30" height="30"></span>
                    Gestor de Reservas
                </a>
            </li>
            <li>
                <a class="text" href="PAGINA_GestionOrdenes.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-comanda.svg" alt="Ordenes" width="30" height="30"></span>
                    Gestor de Ordenes
                </a>
            </li>
            <li>

                <a class="text" href="ModificarPerfil_pagina.php?id=<?php echo $id_perfil ?>" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-ajuste.svg" alt="Configuración" width="30" height="30"></span>
                    Configuración
                </a>
            </li>
            <li>
                <a class="text" href="controlador/Logout.php" style="text-decoration:none">
                    <span><img src="assets/iconos/icono-salir.svg" alt="Logout" width="30" height="30"></span>
                    Logout
                </a>
            </li>
        </ul>
    </aside>



</body>

</html>