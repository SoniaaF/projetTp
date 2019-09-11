<?php
session_start();
include '../../controllers/User/profilUserCtrl.php';
require_once '../../header.php';
?>
<div class='d-flex flex-column align-items-center'>
    <h4 class='font-weight-bold mt-4 mb-2'>ID de l'utilisateur</h4>
    <p><?= $_SESSION['user']['id'] ?></p>
    <h4 class='font-weight-bold my-2'>Nom</h4>
    <p><?= $_SESSION['user']['lastName'] ?></p>
    <h4 class='font-weight-bold my-2'>Prénom</h4>
    <p><?= $_SESSION['user']['firstName'] ?></p>
</div>
<form action="" method="POST">
    <button type='submit' name='disconnect'>Deconnexion</button>
</form>
<?php require_once '../../footer.php';