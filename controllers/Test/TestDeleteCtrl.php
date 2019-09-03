<?php
include_once 'models/Model.php';
if (isset($_POST['delete'])) {
    $deleteTest = new Test();
    $delete = $deleteTest->deleteTest($IDTest);
}
?>