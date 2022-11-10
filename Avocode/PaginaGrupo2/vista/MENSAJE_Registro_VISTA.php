<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Gestor</title>
    <script>
        $("#MyButton").click(function() {
            alert('Confirm to refresh alert messages.');
            $("#refreshDivID").load("#refreshDivID .reloaded-divs > *");
        });
    </script>
</head>

<body>
    <?php session_start();
    if (isset($_SESSION['message_reg']) && $_SESSION['message_reg'] != "no") { ?>
        <div class="container-alert">
            <br>
            <div class="col-md-12-1">
                <div class="alert alert-info alert-dismissable">
                    <div class="alert-icon">
                        <span class="fa fa-info my_appended_icon"></span>
                    </div>
                    <div class="alert-text"> <?= $_SESSION['message_reg'] ?> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </div>
                    </button>
                </div>
            </div>
        </div>
    <?php $_SESSION['message_reg'] = 'no';
    } ?>
</body>

</html>