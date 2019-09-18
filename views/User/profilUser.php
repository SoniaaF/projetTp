<?php
session_start();
include '../../controllers/User/profilUserCtrl.php';
require_once '../../header.php';
?>
<div class="container-fluid">
    <div class="row flex-column align-items-center color">
        <div id="container">
            <div class="loginForm text-center">
                <h4 class='font-weight-bold my-2'>Nom</h4>
                <p><?= $_SESSION['user']['lastName'] ?></p>
                <h4 class='font-weight-bold my-2'>Prénom</h4>
                <p><?= $_SESSION['user']['firstName'] ?></p>
            </div>
        </div>
    </div>
</div>

<form action="" method="POST">
    <button type='submit' name='disconnect'>Deconnexion</button>
</form>
<?php require_once '../../footer.php'; ?>