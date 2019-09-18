<?php

require_once '../../models/User.php';
$user = new User();
// On verrifie si l'utilisateur à essayer de se connecter
if (isset($_POST['connect'])) {
    $userConnect = $user->emailExists($_POST['mail']);
    // On verrifie si l'adresse mail existe dans la base de donées
    if ($userConnect) {
        // Si elle existe on vérifie que le mot de passe est le bon
        if (password_verify($_POST['password'], $userConnect['password'])){
            // Si oui on enregistre l'utilisateur dans la session
            $_SESSION['user'] = $userConnect;
            header('Location:profilUser.php');
            // Si non, on indique que l'indentifiant ou le mot de passe est incorrect
        }else{
            $connectError = 'Identifiant ou mot de passe incorrect.';
        }
    } else {
        $connectError = 'Identifiant ou mot de passe incorrect.';
    }
}
?>