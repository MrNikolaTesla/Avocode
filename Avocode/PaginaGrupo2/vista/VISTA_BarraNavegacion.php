<?php
//RECORDAR!!!!!!!!!! EL SEGUNDO MENSAJE DE BIENVENIDA SE ELIMINARA SEGUN TENGAMOS FUNCIONANDO EL MODIFICAR PERFIL DE USUARIO CORRECTAMENTE
if ($permiso == "cliente") {
?>
    <div class="menu-nav-cliente">
        <ul>
            <?php
            if ($_SESSION['nuevo_ingreso'] == "true") {
                $_SESSION['sesion_iniciada'] = "true";
                header("Location: index.php");
            }else{
                echo "<p class='saludo-cliente'>Algo ha sucedido, intentelo de nuevo mas tarde.</p>";
            }
            ?>
        </ul>
    </div>
<?php
} else if ($permiso == "empleado") {
?>
    <div class="menu-nav-admin">
        <ul>
            <?php
            if ($_SESSION['nuevo_ingreso'] == "true") {
                echo "<li><p class='saludo-admin'>¡Bienvenido " . $nombre . "!</p></li><hr size=5 noshade='noshade' color='#743535'>";
                $_SESSION['nuevo_ingreso'] = "false";
            } else {
                echo "<li><p class='saludo-admin'>" . $nombre . " " . $apellido . "</p></li><hr size=5 noshade='noshade' color='#743535'>";
            }
            echo "<li><a class='btn-admin' href='PAGINA_GestionUsuarios.php'>Gestor de Usuarios</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href='PAGINA_GestionProductos.php?update=<?php echo rand(0,2581023);'>Gestor de Productos</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href='PAGINA_GestionProveedores.php'>Gestor de Proveedores</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href='PAGINA_GestionMesas.php'>Gestor de Mesas</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href='PAGINA_GestionReservas.php'>Gestor de Reservas</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href=''>Espacio para Comandas</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href='controlador/Logout.php'>Logout</a></li><hr size=5 noshade='noshade' color='#743535'>";
            ?>
        </ul>
    </div>
<?php
} else {
?>
    <div class="menu-nav-admin">
        <ul>
            <?php
            if ($_SESSION['nuevo_ingreso'] == "true") {
                echo "<li><p class='saludo-admin'>¡Bienvenido " . $nombre . "!</p></li><hr size=5 noshade='noshade' color='#743535'>";
                $_SESSION['nuevo_ingreso'] = "false";
            } else {
                echo "<li><p class='saludo-admin'>" . $nombre . " " . $apellido . "</p></li><hr size=5 noshade='noshade' color='#743535'>";
            }
            echo "<li><a class='btn-admin' href='PAGINA_GestionUsuarios.php'>Gestor de Usuarios</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href='PAGINA_GestionProductos.php?update=<?php echo rand(0,2581023);'>Gestor de Productos</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href='PAGINA_GestionProveedores.php'>Gestor de Proveedores</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href='PAGINA_GestionMesas.php'>Gestor de Mesas</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href='PAGINA_GestionReservas.php'>Gestor de Reservas</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href=''>Espacio para Comandas</a></li><hr size=5 noshade='noshade' color='#743535'>";
            echo "<li><a class='btn-admin' href='controlador/Logout.php'>Logout</a></li><hr size=5 noshade='noshade' color='#743535'>";
            ?>
        </ul>
    </div>
<?php } ?>