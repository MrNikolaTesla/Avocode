<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles_alertas.css">
    <title>Mensaje Perfil INDEX</title>

</head>

<body>

    <?php
    if (isset($_SESSION['message']) && $_SESSION['message'] != "no") { ?>
        <div class="container-alert">
            <br>
            <div class="col-md-12-1">
                <div class="alert alert-info alert-dismissable">
                    <div class="alert-icon">
                        <span class="fa fa-info my_appended_icon"></span>
                    </div>
                    <div class="alert-text" class="btn-close"> <?= $_SESSION['message'] ?> 
                    </div>
                    </button>
                </div>
            </div>
        </div>
    <?php $_SESSION['message'] = 'no';
    } ?>
</body>

</html>