
<?php include("Modelo/Conexion.php");?>
<?php
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$correo_captado=null;
$contraseña_captada=null;
$habemus_correo=null;
$habemus_contraseña=null;

if($correo!=null && $contraseña!=null){
    $query_correo = "SELECT * FROM datos WHERE correo = '$correo'";
    $correo_captado = mysqli_query($connection, $query_correo);
    $habemus_correo = mysqli_fetch_array($correo_captado);
    if($habemus_correo){
        $id = $habemus_correo['id'];
        $nombre = $habemus_correo['nombre'];
        $apellidos = $habemus_correo['apellido'];
        }
    $query_contraseña = "SELECT * FROM datos WHERE password = '$contraseña' AND id = '$id'";
    $contraseña_captado = mysqli_query($connection, $query_contraseña);
    $habemus_contraseña = mysqli_num_rows($contraseña_captado);
    }else{
        header("Location: inicioFallido.php");
    }

    if($habemus_correo){
    ?><h4>Sesión iniciada con exito!</h4><?php
    }else{
        header("Location: inicioFallido.php");
    }
    if(!$habemus_contraseña){
    header("Location: inicioFallido.php");
    }
    print "Bienvenido $nombre $apellidos!";
    ?>
    <br>Funcionanding.
    </section>
</body>
</html>
