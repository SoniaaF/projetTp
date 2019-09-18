<?php
session_start();
require_once '../../controllers/User/confirmMessageCtrl.php';
require_once '../../header.php';
?>
<p class="alert alert-success mt-5 text-center"><?= $confirmMessage ?></p>
<?php require_once '../../footer.php'; ?>
