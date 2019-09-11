<?php

if (!isset($_SESSION['user']) || empty($_SESSION['user'])){
}
include_once '../../models/TestModel.php';
$test = new Test();
$testList = $test->getAllTest();