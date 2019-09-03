<?php
include_once 'models/Model.php';
if(isset($_POST['create'])){
$createTest = new Test();
$create = $createTest->createTest($Question, $Answer1, $Answer2, $Answer3, $Answer4, $TrueAnswer);
}