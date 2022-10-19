<?php
    require_once("modelo/Mesa.php");
    $mesa = new Mesa();
    if(!empty($_POST["boton_registro"])){
    //No tiene valores porque el numero se auto_asigna y el estado es el predeterminado.
    $ciclos = $_POST["numero"];
    while($ciclos > 0){
    $ciclos = $ciclos-1;
    $estado = $mesa->set_mesa();
    }

if($estado==1) {
    $_SESSION['message'] = 'Mesa agregada correctamente!';
    header("Location: PAGINA_GestionMesas.php");
}else{
    $_SESSION['message'] = 'Algo ha sucedido, intente de nuevo mas tarde.';
    header("Location: PAGINA_GestionMesasphp");
} 
}

?>