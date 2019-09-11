<?php

require_once '../../models/User.php';
$user = new User();
// pattern pour la vérification du formulaire
$stringPattern = '/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._-]{3,60}$/';
$mailPattern = '/^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/';
$passwordPattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_?])([-+!*$@%_?\w]{8,15})$/';
//   On test chaque input en fonction de son pattern et si ils ne correspondent pas on insert un message d'erreur
//   et on réinitialise le POST afin de ne pas le garder dans le champ
$formError = [];
if ($_POST) {
    // Si le champs Nom est vide
    if (empty($_POST['lastName'])) {
        $formError['lastName'] = 'Veuillez entrer un Nom.';
        // Si le Nom est incorrect
    } elseif (!preg_match($stringPattern, $_POST['lastName'])) {
        $formError['lastName'] = 'Veuillez entrer un Nom valide.';
        // Si le Nom est correct
    } else {
        $lastName = trim(strip_tags($_POST['lastName']));
    }
    // Si le champs Prénom est vide
    if (empty($_POST['firstName'])) {
        $formError['firstName'] = 'Veuillez entrer un Prénom.';
        // Si le Prénom est incorrect
    } elseif (!preg_match($stringPattern, $_POST['firstName'])) {
        $formError['firstName'] = 'Veuillez entrer un Prénom valide.';
        // Si le Prénom est correct
    } else {
        $firstName = trim(strip_tags($_POST['firstName']));
    }
    // Si le champs adresse mail est vide
    if (empty($_POST['mail'])) {
        $formError['mail'] = 'Veuillez entrer une adresse mail.';
        // Si le mail est incorrect
    } elseif ($user->emailExists($_POST['mail'])) {
        $formError['mail'] = 'Cette adresse mail est déjà utilisée.';
    } elseif (!preg_match($mailPattern, $_POST['mail'])) {
        $formError['mail'] = 'Veuillez entrer une adresse mail valide.';
        // Si le mail est correct
    } else {
        $mail = trim(strip_tags($_POST['mail']));
    }
    // Si le champs mot de passe est vide
    if (empty($_POST['password'])) {
        $formError['password'] = 'Veuillez entrer un mot de passe.';
        // Si le mot de passe est incorrect
    } elseif (!preg_match($passwordPattern, $_POST['password'])) {
        $formError['password'] = 'Veuillez entrer un mot de passe valide.';
        // Si le mot de passe est correct
    } else {
        $password = trim(strip_tags($_POST['password']));
    }
}
if (count($_POST) > 3) {
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $newUser = new User();
    if (empty($formError)) {
        //on appelle la methode qui insere l'utilisateur dans la BDD
        $User = $newUser->createUser($lastName, $firstName, $mail, $password);
    }
}
require_once '../../views/User/addUserForm.php';
?> 