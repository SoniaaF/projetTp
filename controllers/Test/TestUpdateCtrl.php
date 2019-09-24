<?php

include_once '../../models/TestModel.php';
// pattern pour la vérification du formulaire
$stringPattern = '/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ 0-9\'?._-]{1,60}$/';
// Tableau vide pour stocker les message d'erreur
$formError = [];
// Récupére l'id du 'select' pour afficher la question
if (isset($_POST['select'])) {
    $test = new Test();
    $selectedTest = $test->getTest($_POST['id']);
}

//   On test chaque input en fonction de son pattern et si ils ne correspondent pas on insert un message d'erreur
if ($_POST['submit']) {
    // Si le champs Question est vide
    if (empty($_POST['Question'])) {
        $formError['Question'] = 'Veuillez entrer une question.';
        // Si la Question est incorrect
    } elseif (!preg_match($stringPattern, $_POST['Question'])) {
        $formError['Question'] = 'Veuillez entrer une question valide.';
        // Si la Question est correct
    } else {
        $lastName = trim(strip_tags($_POST['Question']));
    }
    // Si le champs Réponse 1 est vide
    if (empty($_POST['Answer1'])) {
        $formError['Answer1'] = 'Veuillez entrer une réponse.';
        // Si le Réponse 1 est incorrect
    } elseif (!preg_match($stringPattern, $_POST['Answer1'])) {
        $formError['Answer1'] = 'Veuillez entrer une réponse valide.';
        // Si le Réponse 1 est correct
    } else {
        $lastName = trim(strip_tags($_POST['Answer1']));
    }
    // Si le champs Réponse 2 est vide
    if (empty($_POST['Answer2'])) {
        $formError['Answer2'] = 'Veuillez entrer une réponse.';
        // Si le Réponse 2 est incorrect
    } elseif (!preg_match($stringPattern, $_POST['Answer2'])) {
        $formError['Answer2'] = 'Veuillez entrer une réponse valide.';
        // Si le Réponse 2 est correct
    } else {
        $lastName = trim(strip_tags($_POST['Answer2']));
    }
    // Si le champs Réponse 3 est vide
    if (empty($_POST['Answer3'])) {
        $formError['Answer3'] = 'Veuillez entrer une réponse.';
        // Si le Réponse 3 est incorrect
    } elseif (!preg_match($stringPattern, $_POST['Answer3'])) {
        $formError['Answer3'] = 'Veuillez entrer une réponse valide.';
        // Si le Réponse 3 est correct
    } else {
        $lastName = trim(strip_tags($_POST['Answer3']));
    }
    // Si le champs Réponse 4 est vide
    if (empty($_POST['Answer4'])) {
        $formError['Answer4'] = 'Veuillez entrer une réponse.';
        // Si le Réponse 4 est incorrect
    } elseif (!preg_match($stringPattern, $_POST['Answer4'])) {
        $formError['Answer4'] = 'Veuillez entrer une réponse valide.';
        // Si le Réponse 4 est correct
    } else {
        $lastName = trim(strip_tags($_POST['Answer4']));
    }
}
if (isset($_POST['submit'])) {
    $id = $_POST['submit'];
    $Question = isset($_POST['Question']) ? $_POST['Question'] : 0;
    $Answer1 = isset($_POST['Answer1']) ? $_POST['Answer1'] : 0;
    $Answer2 = isset($_POST['Answer2']) ? $_POST['Answer2'] : 0;
    $Answer3 = isset($_POST['Answer3']) ? $_POST['Answer3'] : 0;
    $Answer4 = isset($_POST['Answer4']) ? $_POST['Answer4'] : 0;
    $TrueAnswer = isset($_POST['TrueAnswer']) ? $_POST['TrueAnswer'] : 0;
    $updateTest = new Test();
    if (empty($formError)) {
        //on appelle la methode qui insere la question dans la BDD
        $update = $updateTest->updateTest($id, $Question, $Answer1, $Answer2, $Answer3, $Answer4, $TrueAnswer);
    }
}
$test = new Test();
$testList = $test->getAllTest();
require_once '../../views/Test/TestUpdateView.php';
?> 