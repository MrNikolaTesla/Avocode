<?php
if (isset($_SESSION['message']) && $_SESSION['message'] != "no") { ?>
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

<?php $_SESSION['message'] = 'no';
} ?>