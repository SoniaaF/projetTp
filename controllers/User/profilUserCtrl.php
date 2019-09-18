<?php

require_once '../../models/User.php';
$user = new User();

$pageTitle = $_SESSION['user']['lastName'] . ' ' . $_SESSION['user']['firstName'];

if (isset($_POST['disconnect'])) {
    $_SESSION = [];
    header('Location:../../index.php');
}
?>