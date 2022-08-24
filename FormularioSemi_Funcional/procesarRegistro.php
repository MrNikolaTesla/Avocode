<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro de Usuario</title>
</head>
<body>
<form method="POST" action="procesarRegistro.php">

<?php
include("conexionBD.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$query = "INSERT INTO datos(nombre, apellido, correo, password) VALUES ('$nombre', '$apellido', '$correo', '$contraseña')";
$result = mysqli_query($connection, $query);

if($result){
?>
    <section class="form-register">
    <h4>Sesión iniciada</h4>
    <p>Este es un mensaje de prueba, no guarda los datos en la BD</p>
    La clase form-register no funciona correctamente con la etiqueta "p"
    </section>
<?php } ?>
</form>
</body>
</html>