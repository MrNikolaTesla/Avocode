<link rel="stylesheet" href="assets/styles2.css">

<?php session_start();
if (isset($_SESSION['message']) && $_SESSION['message'] != "no") { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php $_SESSION['message'] = 'no';
} ?>