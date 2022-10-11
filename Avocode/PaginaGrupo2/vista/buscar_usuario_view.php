<div class="col-xs-4">
<form method="POST">
                            <div class="search-box">
                            <?php require_once("controlador/Controlador_Buscar_Usuario.php");?>
                                <div class="input-group" type="text" name="busqueda">
                                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                    <input type="text" name="usuario" class="form-control" placeholder="Buscar&hellip;">
                                    <input class="buttons" type="submit" name="busqueda" value="Buscar"></input>
                                    <input class="buttons" type="submit" value="Reiniciar"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>