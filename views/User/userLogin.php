<?php
session_start();
include '../../controllers/User/userLoginCtrl.php';
require_once '../../header.php';
?>
<div class="container-fluid">
    <div class="row flex-column align-items-center color">
        <div id="container">
            <!-- zone de connexion -->
            <form action="" method="POST" class="loginForm text-center">
                <h1>Connexion</h1>
                <div class="form-group">
                    <label><b>Adresse mail :</b></label>
                    <input type="mail" placeholder="Entrez votre mail" name="mail" required>
                </div>
                <div class="form-group">
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrez le mot de passe" name="password" required>
                </div>
                <input type="submit" id='submit' name="connect" value="Connexion" class="btn btn-outline-dark font-weight-bold mr-0">
                <?php if (isset($connectError)) { ?>
                    <p class="alert alert-danger errorConnect mt-4"><?= $connectError ?></p>
                <?php } ?>
            </form>
        </div>
    </div>
    <div class="row color">
        <div class="container-fluid">
            <input type="image" src='../../assets/img/fleche-haut.jpg' width="50px" height="50px" id="rideUp" />
        </div>
    </div>
</div>
<?php require_once '../../footer.php'; ?>