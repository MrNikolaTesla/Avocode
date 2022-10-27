<?php
    session_start();
    require_once("modelo/Reserva.php");
    $reserva_mod = new Reserva();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["num_mesa"]) and !empty($_POST["fecha"]) and !empty($_POST["hora"]) and !empty($_POST["cliente_id"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $id = $_POST["id"];
        $num_mesa = $_POST["num_mesa"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $cliente_id = $_POST["cliente_id"];
        $id_empleado_reserva = $_POST["empleado_id"];

        $repetido = $reserva_mod->get_reserva($nombre_apellido, $empresa, $productos, $telefono);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $reserva_mod->update_reserva($id, $num_mesa, $fecha, $hora, $cliente_id, $id_empleado_reserva);
    }

        

if($estado==1) {
    $_SESSION['message'] = 'Reserva modificada correctamente';
    header("Location: PAGINA_GestionReservas.php");
}else if($repetido!=null){
    $_SESSION['message'] = 'Reserva equivalente ya encontrada en el sistema.';
    header("Location: PAGINA_GestionReservas.php");
}else{
    $_SESSION['message'] = 'Reserva no modificada, algo ha fallado, verifique los valores ingresados.';
    header("Location: PAGINA_GestionReservas.php");
}
}else{
echo "Algunos de los campos necesarios estan vacios";
}
}

?>