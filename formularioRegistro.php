<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="verificacionPasswordStyles.css">
  <title>Formulario Registro</title>
  <script type="text/javascript" src="verificacionPassword.js">$(document).ready(function () {
    //variables
    var passwordRegistro1 = $('[name=passwordReg1]');
    var passwordRegistro2 = $('[name=passwordReg2]');
    var coincidenciaPassword = "Las contraseñas si coinciden";
    var noCoincidenciaPassword = "Las contraseñas no coinciden";
    var minimoPassword = "La contraseña debe de tener un mínimo de 10 caracteres";
    var maximoPassword = "La contraseña debe de tener un máximo de 20 caracteres";
    var nuloPassword = "Las contraseñas no pueden estar vacías";
    //oculto por defecto el elemento span
    var span = $('<span></span>').insertAfter(passwordRegistro2);
    span.hide();
    //función que comprueba las dos contraseñas
    function verificacionPassword() {
        var valor1 = passwordRegistro1.val();
        var valor2 = passwordRegistro2.val();
        //muestro el span
        span.show().removeClass();
        //condiciones dentro de la función
        if (valor1 != 0 && valor2 != 0) {
            if (valor1.length < 10 || valor2.length < 10) {
                span.text(minimoPassword).addClass('longitud');
            } else if (valor1.length > 20 || valor2.length > 20) {
                span.text(maximoPassword).addClass('longitud');
            } else {
                if (valor1 == valor2) {
                    span.text(coincidenciaPassword).removeClass("negacion").addClass("confirmacion");

                } else {
                    span.text(noCoincidenciaPassword).addClass("coincide");
                }
            }
        } else {
            span.text(nuloPassword).addClass("negacion");
        }
    }
    //ejecuto la función al soltar la tecla
    passwordRegistro2.keyup(function () {
        verificacionPassword();
    });
    passwordRegistro1.keyup(function () {
        verificacionPassword();
    });
});</script>

</head>

<body>
<form method="POST" action="procesarRegistro.php">
  <section class="form-register">
    <h4>Formulario de Registro</h4>
    <input class="" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre"></input>
    <input class="" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido"></input>
    <input class="" type="email" name="correo" id="correo" placeholder="Ingrese su Correo"></input>
    <input class="" type="password" name="passwordReg1" id="contraseña" placeholder="Ingrese su Contraseña"></input>
    <input class="" type="password" name="passwordReg2" id="contraseña" placeholder="Ingrese su Contraseña"></input>
    <script type="text/javascript">
    <p>Estoy de acuerdo con <a href="terminos.php">Términos y Condiciones</a></p>
    <input class="" type="submit" value="Registrar"></input>
    <p><a href="inicioSesion.php">Ya tengo Cuenta.</a></p>
  </section>
</form>

</body>
</html>

<!-- https://www.pexels.com/photo/man-standing-beside-commercial-espresso-machine-2067431/ --> 