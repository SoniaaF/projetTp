<?php

include_once '../../models/TestModel.php';
if (isset($_POST['submit'])) {
    $id = isset($_POST['delete']) ? $_POST['delete'] : 0;
    $deleteTest = new Test();
    $delete = $deleteTest->deleteTest($id);
}
$test = new Test();
$testList = $test->getAllTest();
require_once '../../views/Test/TestDeleteView.php'
?>