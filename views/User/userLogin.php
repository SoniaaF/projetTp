<?php

require_once '../../header.php';
include '../../controllers/User/userLoginCtrl.php';
?>
<div id="container">
    <!-- zone de connexion -->

    <form action="verification.php" method="POST">
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' value='LOGIN' >
        <?php
        if (isset($_GET['erreur'])) {
            $err = $_GET['erreur'];
            if ($err == 1 || $err == 2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
<div class="row color">
    <div class="container-fluid">
        <input type="image" src='../../assets/img/fleche-haut.jpg' width="50px" height="50px" id="rideUp" />
    </div>
</div>
<?php require_once '../../footer.php'; ?>