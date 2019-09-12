<?php

if (!isset($_SESSION['confirmMessage']) || !isset($_SESSION['redirection'])) {
    header('Location:acceuil');
}

$confirmMessage = $_SESSION['confirmMessage'];
$redirection = $_SESSION['redirection'];
unset($_SESSION['confirmMessage']);
unset($_SESSION['redirection']);

header('Refresh:2;URL=' . $redirection);
?>
