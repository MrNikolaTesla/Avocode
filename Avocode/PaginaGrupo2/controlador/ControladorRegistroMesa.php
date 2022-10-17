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
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Mesa agregada correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}else{
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    Algo ha sucedido, intente de nuevo mas tarde.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
} 
}

?>