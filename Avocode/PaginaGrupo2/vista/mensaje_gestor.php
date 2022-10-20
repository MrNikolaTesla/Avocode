<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
<link rel="stylesheet" href="assets/styles_alertas.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet">



<script>
    $("#MyButton").click(function() {
        alert('Confirm to refresh alert messages.');
        $("#refreshDivID").load("#refreshDivID .reloaded-divs > *");
    });
</script>

<?php session_start();
if (isset($_SESSION['message']) && $_SESSION['message'] != "no") { ?>
    <div class="container-alert">
        <br>
        <div class="col-md-122">
            <div class="alert alert-info alert-dismissable">
                <div class="alert-icon">
                    <span class="fa fa-info my_appended_icon"></span>
                </div>
                <div class="alert-text"> <?= $_SESSION['message'] ?> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </div>
                </button>
            </div>
        </div>
    </div>
<?php $_SESSION['message'] = 'no';
} ?>