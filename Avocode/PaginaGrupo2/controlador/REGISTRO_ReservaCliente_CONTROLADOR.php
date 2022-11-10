<?php
    require_once("modelo/Reserva.php");
    $reserva = new Reserva();
    require_once("modelo/Mesa.php");
    $mesa = new Mesa();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["num_mesa"]) and !empty($_POST["fecha"]) and !empty($_POST["hora"])) {

        $num_mesa = $_POST["num_mesa"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $cliente_id = $_SESSION["id"];

        $estado_mesa = $mesa->get_estado_mesa($num_mesa);

            foreach($estado_mesa as $mesa_elegida){
                $confirmacion_estado = $mesa_elegida['estado'];
            }
        

        if($confirmacion_estado != "Libre"){
            $estado=2;
        }else{
        $estado = $reserva->set_reserva_cliente($num_mesa, $fecha, $hora, $cliente_id);
        }

if($estado==1) {
    require_once("modelo/Mesa.php");
            $mesa_a_reservar = new Mesa();
            $mesa_a_reservar->reservar_mesa($num_mesa);
    $_SESSION['message'] = 'Reserva registrada correctamente, nos vemos pronto!';
    header("Location: PAGINA_AltaReservaCliente.php");
}else if($estado==0){
    $_SESSION['message'] = 'Algo ha fallado, verifica los datos ingresados.';
    header("Location: PAGINA_AltaReservaCliente.php");
}else if($estado==2){
    $_SESSION['message'] = 'Mesa ocupada, reservada o no existente.';
    header("Location: PAGINA_AltaReservaCliente.php");
}
}else{
    $_SESSION['message'] = 'Alguno de los campos está vacio.';
    header("Location: PAGINA_AltaReservaCliente.php");
}
}

?>