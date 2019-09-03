<?php
session_start();
require_once 'models/User.php';
$user = new User();
$user->setId($_GET['id']);
$user->getUserById();
// pattern pour la vérification du formulaire
$emailPattern = '^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/';
$stringPattern = '/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{3,60}$/';
$passwordPattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_?])([-+!*$@%_?\w]{8,15})$/';
//   On test chaque input en fonction de son pattern et si ils ne correspondent pas on insert un message d'erreur
//   et on réinitialise le POST afin de ne pas la garder dans le champ
$formError = [];
if ($_POST['updateForm']) {
    // Si le champs nom est vide
    if (empty($_POST['lastName'])) {
        $formError['lastName'] = 'Veuillez entrer un nom.';
        // Si le nom est incorrect
    } elseif (!preg_match($stringPattern, $_POST['lastName'])) {
        $formError['lastName'] = 'Veuillez entrer un nom valide.';
        // Si le nom est correct
    } else {
        $lastName = trim($_POST['lastName']);
    }
    // Si le champs prénom est vide
    if (empty($_POST['firstName'])) {
        $formError['firstName'] = 'Veuillez entrer un prénom.';
        // Si le prénom est incorrect
    } elseif (!preg_match($stringPattern, $_POST['firstName'])) {
        $formError['firstName'] = 'Veuillez entrer un prénom valide.';
        // Si le prénom est correct
    } else {
        $firstName = trim($_POST['firstName']);
    }
    // Si le champs Mail est vide
    if (empty($_POST['mail'])) {
        $formError['mail'] = 'Veuillez entrer une adresse mail.';
        // Si le mail est incorrect
    } elseif (!preg_match($mailPattern, $_POST['mail'])) {
        $formError['mail'] = 'Veuillez entrer une adresse mail valide.';
        // Si le pseudo est correct
    } else {
        $address = trim($_POST['mail']);
    }
    // Si le champs date de naissance est vide
    if (empty($_POST['birthDate'])) {
        $formError['birthDate'] = 'Veuillez entrer une date de naissance.';
        // Si la date de naissance est incorrect
    } elseif (!preg_match($datePattern, $_POST['birthDate'])) {
        $formError['birthDate'] = 'Veuillez entrer une date de naissance valide.';
        // Si la date de naissance est correct
    } else {
        $birthDate = trim($_POST['birthDate']);
    }
    // Si le champ mot de passe est vide
    if (empty($_POST['password'])) {
        $formError['password'] = 'Veuillez entrer un mot de passe.';
        // Si le mot de passe est incorrect
    } elseif (!preg_match($passwordPattern, $_POST['password'])) {
        $formError['password'] = 'Veuillez entrer un mot de passe valide.';
        // Si le mot de passe est correct
    } else {
        $password = trim($_POST['password']);
    }
    if (empty($formError)) {
        $id = (int) $_POST['id'];
        if ($user->updateUser($id)) {
            header('Location: ?page=accueil');
            exit();
        } else {
            echo 'Enregistrement à échoué';
        }
    }
}
require_once 'views/updateUserForm.php';
?>