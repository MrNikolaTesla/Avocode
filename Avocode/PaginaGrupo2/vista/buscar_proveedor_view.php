<form method="POST">
        <section>
            <?php require_once("controlador/Controlador_Buscar_Proveedor.php");?>
            <input class="controls" type="text" name="proveedor" placeholder="Ingrese un producto a buscar"></input>
            <input class="buttons" type="submit" name="busqueda" value="Buscar"></input>
            <input class="buttons" type="submit" value="Reiniciar"></input>
        </section>
</form>