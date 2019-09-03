<?php
require_once '../../header.php';
include '../../controllers/User/addUserFormCtrl.php';
?>
<div class="row flex-column align-items-center color">
    <section class="signup">
        <div class="container form-signup">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form">
                    <h2 class="form-title">Créer un compte</h2>
                    <div class="form-group">
                        <!-- Nom -->
                        <label for="lastName" class='font-weight-bold'>Nom :</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Votre nom" value="<?= $lastName ?? '' ?>" required>
                        <span class="help-block"><?= $formError['lastName'] ?? '' ?></span>
                                        <!--<input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>-->
                    </div>
                    <div class="form-group">
                        <!-- Prénom -->
                        <label for="firstName" class='font-weight-bold'>Prénom :</label>
                        <input type="text" class="form-control" name="firstName" placeholder="Votre prénom" value="<?= $firstName ?? '' ?>" required>
                        <span class="help-block"><?= $formError['firstName'] ?? '' ?></span>
                                        <!--<input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>-->
                    </div>
                    <div class="form-group">
                        <label for="mail" class='font-weight-bold'>Adresse mail :</label>
                        <input type="email" class="form-control" name="mail" placeholder="Votre adresse mail" value="<?= $mail ?? '' ?>" required>
                        <!--<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>-->
                        <span class="help-block"><?= $formError['mail'] ?? '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class='font-weight-bold'>Mot de passe :</label>
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe" value="<?= $password ?? '' ?>" required>
                        <!--<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>-->
                        <span class="help-block"><?= $formError['password'] ?? '' ?></span>
                    </div>
                    <div class="m-3 p-0 d-flex justify-content-around">
                        <input type="submit" name="registerform" class="btn btn-outline-primary font-weight-bold mr-0" value="Envoyer">              
                    </div> 
                </form>
                <p class="loginhere">
                    Vous avez déjà un compte ? <a href="#" class="loginhere-link">Cliquez ici !</a>
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
<?php require_once '../../footer.php'; ?>
