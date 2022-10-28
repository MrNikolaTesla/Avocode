<?php
    require_once("modelo/Reserva.php");
    $reserva = new Reserva();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["num_mesa"]) and !empty($_POST["fecha"]) and !empty($_POST["hora"]) and !empty($_POST["cliente_id"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $num_mesa = $_POST["num_mesa"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $cliente_id = $_POST["cliente_id"];
        $id_empleado_reserva = $_SESSION["id"];

        $repetido = $reserva->get_reserva($num_mesa, $fecha, $cliente_id);
        if($repetido==0){
            $estado = 0;
    }
    
    if ($repetido==1){
        $estado = $reserva->set_reserva($num_mesa, $fecha, $hora, $cliente_id, $id_empleado_reserva);
    }

if($estado==1) {
    require_once("modelo/Mesa.php");
            $mesa_a_reservar = new Mesa();
            $mesa_a_reservar->reservar_mesa($num_mesa);
    $_SESSION['message'] = 'Reserva registrada correctamente!';
    header("Location: PAGINA_GestionReservas.php");
}else if($estado==0 && $repetido==0){
    $_SESSION['message'] = 'La reserva ya ha sido agregado al sistema previamente.';
    header("Location: PAGINA_GestionReservas.php");
}else if($estado==0 && $repetido==1){
    $_SESSION['message'] = 'Algo ha fallado, verifica los datos ingresados.';
    header("Location: PAGINA_GestionReservas.php");
}else if($estado==3 && $repetido==1){
    $_SESSION['message'] = 'Mesa ocupada o reservada.';
    header("Location: PAGINA_GestionReservas.php");
}
}else{
    $_SESSION['message'] = 'Alguno de los campos está vacio.';
    header("Location: PAGINA_GestionReservas.php");
}
}

?>