<?php
    session_start();
    require_once("modelo/Reserva.php");
    $reserva_mod = new Reserva();
    require_once("modelo/Mesa.php");
    $mesa = new Mesa();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["num_mesa"]) and !empty($_POST["fecha"]) and !empty($_POST["hora"]) and !empty($_POST["cliente_id"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $id = $_POST["id"];
        $num_mesa = $_POST["num_mesa"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $cliente_id = $_POST["cliente_id"];
        $id_empleado_reserva = $_POST["empleado_id"];

        $estado_mesa = $mesa->get_estado_mesa($num_mesa);

            foreach($estado_mesa as $mesa_elegida){
                $confirmacion_estado = $mesa_elegida['estado'];
            }
        

        if($confirmacion_estado != "Libre"){
            $estado=2;
        }else{
                $estado = $reserva_mod->update_reserva($id, $num_mesa, $fecha, $hora, $cliente_id, $id_empleado_reserva);
        }

        

if($estado==1) {
    $_SESSION['message'] = 'Reserva modificada correctamente';
    header("Location: PAGINA_GestionReservas.php");
}else if($estado==2) {
    $_SESSION['message'] = 'Mesa ocupada, reservada o no existente.';
    header("Location: PAGINA_GestionReservas.php");
}else if($estado==0) {
    $_SESSION['message'] = 'Reserva no modificada, algo ha fallado, verifique los valores ingresados.';
    header("Location: PAGINA_GestionReservas.php");
}
}else{
echo "Algunos de los campos necesarios estan vacios";
}
}

?>