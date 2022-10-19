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

        $repetido = $reserva->get_reserva($num_mesa, $fecha, $hora, $cliente_id);
        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $reserva->set_reserva($num_mesa, $fecha, $hora, $cliente_id, $id_empleado_reserva);
    }

if($estado==1) {
    $_SESSION['message'] = 'Reserva registrada correctamente!';
    header("Location: PAGINA_GestionReservas.php");
}else if(!$estado){
    $_SESSION['message'] = 'La reserva ya ha sido agregado al sistema previamente.';
    header("Location: PAGINA_GestionReservas.php");
} 
}else{
    $_SESSION['message'] = 'Alguno de los campos está vacio.';
    header("Location: PAGINA_GestionReservas.php");
}
}

?>