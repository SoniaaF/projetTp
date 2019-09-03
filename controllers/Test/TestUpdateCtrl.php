<?php

include_once 'models/Model.php';
if (isset($_POST['update'])) {
    $updateTest = new Test();
    $update = $updateTest->updateTest($IDTest, $Question, $Answer1, $Answer2, $Answer3, $Answer4, $TrueAnswer);
}