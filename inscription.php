<?php require_once 'header.php'; ?>
<div id="registration">
    <h2>Inscription</h2>
    <form id="RegisterUserForm" action="" method="post">
        <fieldset>
            <label for="lastName">Nom :</label> <input class="text" id="lastName" type="text" name="lastName"/>
            <label for="firstName">Prénom :</label> <input class="text" id="firstName" type="text" name="firstName"/>
            <label for="email">Email :</label> <input class="text" id="email" type="email" name="email" value="" />
            <label for="password">Mot de passe :</label> <input class="text" id="password" type="password" name="password" />
<!--            <input id="acceptTerms" type="checkbox" name="acceptTerms" />
            <label for="acceptTerms"> I agree to the <a>Terms and Conditions</a> and <a>Privacy Policy</a> </label>-->
            <button id="registerNew" type="submit">Inscription</button></fieldset>
    </form>
</div>
<input type="image" src='assets/img/fleche-haut.jpg' width="50px" height="50px" id="rideUp" />