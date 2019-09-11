<?php

require_once '../../models/User.php';
$user = new User();
//on verrifie si l'utilisateur à essayer de se connecter
if (isset($_POST['connect'])) {
    $userconnect =$user->emailExists($_POST['mail']);
    //On verrifie si l'adresse mail existe dans la base de donées
    if ($userconnect) {
        //Si elle existe on vérifie que le mot de passe est le bon
        if (password_verify($_POST['password'], $userconnect['password'])){
            //Si oui on enregistre l'utilisateur dans la session
            $_SESSION['user'] = $userconnect;
            header('Location:/../français.php');
        }else{
            $connectError = 'Identifiant ou mot de passe incorrect.';
        }
    } else {
        $connectError = 'Identifiant ou mot de passe incorrect.';
    }
}
?>