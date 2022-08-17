$(document).ready(function () {
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
});