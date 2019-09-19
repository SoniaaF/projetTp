<?php
session_start();
include '../../controllers/User/profilUserCtrl.php';
require_once '../../header.php';
?>
<div class="container-fluid">
    <div class="row align-items-center color">
        <div id="container">
            <div class="loginForm text-center">
                <!-- Nom de l'utilisateur -->
                <p class="font-weight-bold my-2">Nom</p>
                <p><?= $_SESSION['user']['lastName'] ?></p>
                <!-- Prénom de l'utilisateur -->
                <p class="font-weight-bold my-2">Prénom</p>
                <p><?= $_SESSION['user']['firstName'] ?></p>
                <!-- Mail de l'utilisateur -->
                <p class="font-weight-bold my-2">Email</p>
                <p><?= $_SESSION['user']['mail'] ?></p>
                <form action="" method="POST">
                    <button type="submit" name="disconnect" class="btn btn-outline-dark font-weight-bold">Deconnexion</button>
                </form>
                <form action="" method="POST">
<!--                    <button type="submit" name="modify" class="btn btn-outline-success font-weight-bold mt-4">Modifier</button>
                    <button type="submit" name="submit" class="btn btn-outline-danger font-weight-bold mt-4"><a href="deleteUser.php">Supprimer</a></button>-->
                </form>
                <form action="" method="POST">
                </form>
            </div>
        </div>
    </div>
    <div class="row color">
        <div class="container-fluid">
            <input type="image" src='../../assets/img/fleche-haut.jpg' width="50px" height="50px" id="rideUp" />
        </div>
    </div>
</div>
<?php require_once '../../footer.php'; ?>