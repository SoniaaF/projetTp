<?php
session_start();
include '../../controllers/User/addUserFormCtrl.php';
require_once '../../header.php';
?>
<div class="container-fluid">
    <div class="row flex-column align-items-center color">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Créer un compte</h2>
                        <div class="form-group">
                            <!-- Nom -->
                            <label for="lastName" class='font-weight-bold'>Nom :</label>
                            <input type="text" class="form-control" name="lastName" placeholder="Votre nom" value="<?= $lastName ?? '' ?>" required>
                            <span class="help-block error"><?= $formError['lastName'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Prénom -->
                            <label for="firstName" class='font-weight-bold'>Prénom :</label>
                            <input type="text" class="form-control" name="firstName" placeholder="Votre prénom" value="<?= $firstName ?? '' ?>" required>
                            <span class="help-block error"><?= $formError['firstName'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Adresse mail -->
                            <label for="mail" class='font-weight-bold'>Adresse mail :</label>
                            <input type="email" class="form-control" name="mail" placeholder="Votre adresse mail" value="<?= $mail ?? '' ?>" required>
                            <span class="help-block error"><?= $formError['mail'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Mot de passe -->
                            <label for="password" class='font-weight-bold'>Mot de passe :</label>
                            <div id="infobulle">
                                <ul>Doit contenir au moins :
                                    <li>- Un chiffre</li>
                                    <li>- Une majuscule</li>
                                    <li>- Une minuscule</li>
                                    <li>- Un caractère spécial (!,&,$,...)</li>
                                </ul>                        
                                <input type="password" class="form-control" name="password" placeholder="Mot de passe" value="<?= $password ?? '' ?>" required>
                            </div>
                            <small class="form-text">Minimum 8 caractères</small>
                            <span class="help-block error"><?= $formError['password'] ?? '' ?></span>
                        </div>
                        <div class="m-3 p-0 d-flex justify-content-around">
                            <input type="submit" name="submit" class="btn btn-outline-dark font-weight-bold mr-0" value="Inscription">              
                        </div>
                    </form>
                    <p class="loginHere">
                        Vous avez déjà un compte ? <a href="../../views/User/userLogin.php" class="loginHere-link">Cliquez ici !</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <div class="row color">
        <div class="container-fluid">
            <input type="image" src='../../assets/img/fleche-haut.jpg' width="50px" height="50px" id="rideUp" />
        </div>
    </div>
</div>
<?php require_once '../../footer.php'; ?>
