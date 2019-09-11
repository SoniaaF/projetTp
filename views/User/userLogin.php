<?php
session_start();
require_once '../../header.php';
include '../../controllers/User/userLoginCtrl.php';
?>
<div id="container">
    <!-- zone de connexion -->

    <form action="" method="POST">
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="mail" placeholder="Entrer votre mail" name="mail" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' name="connect" >

    </form>
    <?php if (isset($connectError)) { ?>
        <p class="alert-danger alert"><?= $connectError ?></p>
    <?php } ?>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
<div class="row color">
    <div class="container-fluid">
        <input type="image" src='../../assets/img/fleche-haut.jpg' width="50px" height="50px" id="rideUp" />
    </div>
</div>
<?php require_once '../../footer.php'; ?>