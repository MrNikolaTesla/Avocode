<?php
    if ($permiso == "cliente") {
    ?>
        <div class="menu-nav-cliente">
            <ul>
                <?php
                if ($_SESSION['nuevo_ingreso'] == "true") {
                    echo "<p class='saludo-cliente'>¡Bienvenido " . $nombre . "!</p><hr size=5 noshade='noshade' color='#000'>";
                    $_SESSION['nuevo_ingreso'] = "false";
                } else {
                    echo "<li><p class='saludo-cliente'>" . $nombre . "</p></li><hr size=5 noshade='noshade' color='#000'>";
                }
                echo "<li><a class='btn-cliente' href=''>1OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
                echo "<li><a class='btn-cliente' href=''>2OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
                echo "<li><a class='btn-cliente' href=''>3OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
                echo "<li><a class='btn-cliente' href=''>4OpcionCliente</a></li><hr size=5 noshade='noshade' color='#000'>";
                echo "<li><a class='btn-cliente' href='controlador/Logout.php'>Logout</a></li><hr size=5 noshade='noshade' color='#000'>";
                ?>
            </ul>
        </div>
    <?php
    } else if ($permiso == "empleado") {
    ?>
        <div class="menu-nav-empleado">
            <ul>
                <?php
                if ($_SESSION['nuevo_ingreso'] == "true") {
                    echo "<p class='saludo-empleado'>¡Bienvenido " . $nombre . "!</p><hr size=5 noshade='noshade' color='#000'>";
                    $_SESSION['nuevo_ingreso'] = "false";
                } else {
                    echo "<li><p class='saludo-empleado'>" . $nombre . "</p></li><hr size=5 noshade='noshade' color='#000'>";
                }
                echo "<li><a class='btn-admin' href='GestionDeUsuarios.php'>Gestor de Usuarios</a></li><hr size=5 noshade='noshade' color='#743535'>";
                echo "<li><a class='btn-admin' href=''>Opcion 1</a></li><hr size=5 noshade='noshade' color='#743535'>";
                echo "<li><a class='btn-admin' href=''>Opcion 2</a></li><hr size=5 noshade='noshade' color='#743535'>";
                echo "<li><a class='btn-admin' href=''>Opcion 3</a></li><hr size=5 noshade='noshade' color='#743535'>";
                echo "<li><a class='btn-admin' href=''>Opcion 4</a></li><hr size=5 noshade='noshade' color='#743535'>";
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
                echo "<li><a class='btn-admin' href='GestionDeUsuarios.php'>Gestor de Usuarios</a></li><hr size=5 noshade='noshade' color='#743535'>";
                echo "<li><a class='btn-admin' href='GestionDeProductos.php?update=<?php echo rand(0,2581023);'>Gestor de Productos</a></li><hr size=5 noshade='noshade' color='#743535'>";
                echo "<li><a class='btn-admin' href='GestionDeProveedores.php'>Gestor de Proveedores</a></li><hr size=5 noshade='noshade' color='#743535'>";
                echo "<li><a class='btn-admin' href=''>3OpcionAdministrador</a></li><hr size=5 noshade='noshade' color='#743535'>";
                echo "<li><a class='btn-admin' href=''>4OpcionAdministrador</a></li><hr size=5 noshade='noshade' color='#743535'>";
                echo "<li><a class='btn-admin' href='controlador/Logout.php'>Logout</a></li><hr size=5 noshade='noshade' color='#743535'>";
                ?>
            </ul>
        </div>
    <?php } ?>