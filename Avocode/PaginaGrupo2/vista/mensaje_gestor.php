<link rel="stylesheet" href="assets/styles_alertas.css">
<script>
    $("#MyButton").click(function() {
        alert('Confirm to refresh alert messages.');
        $("#refreshDivID").load("#refreshDivID .reloaded-divs > *");
    });
</script>


<?php session_start();
if (isset($_SESSION['message']) && $_SESSION['message'] != "no") { ?>
<aside class="container text-center ">
    <aside id="refreshDivID">
        <aside class="reloaded-divs">
    <aside class="alerta-success" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
        </button>
    </aside>
    
</aside>
</aside>
</aside>
</aside>

<?php $_SESSION['message'] = 'no';
} ?>