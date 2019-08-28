<?php require_once 'header.php'; ?>
<?php
$IDTest = isset($_POST['orange']) ? $_POST['orange'] : 0;
$Question = isset($_POST['question']) ? $_POST['question'] : 0;
$Answer1 = isset($_POST['answer1']) ? $_POST['answer1'] : 0;
$Answer2 = isset($_POST['answer2']) ? $_POST['answer2'] : 0;
$Answer3 = isset($_POST['answer3']) ? $_POST['answer3'] : 0;
$Answer4 = isset($_POST['answer4']) ? $_POST['answer4'] : 0;
$TrueAnswer = isset($_POST['trueAnswer']) ? $_POST['trueAnswer'] : 0;
include 'controllers/TestDeleteCtrl.php';
include 'controllers/TestUpdateCtrl.php';
include 'controllers/TestCreateCtrl.php';
include 'controllers/TestReadCtrl.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Jeu QCM : qui veut gagner des millions</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php foreach ($testList as $test): ?>
            <p><?= $test->IDTest ?></p>
            <div class="container">
                <div id="question"><?= $test->Question ?></div>
                <form action="jeu.php" method="POST">
                    <div class="row">
                        <div class="col-lg-offset-1 col-lg-5"><input type="radio" name="reponse" class="btn btn-info" value="<?= $test->Answer1 ?>"><?= $test->Answer1 ?></div>
                        <div class="col-lg-offset-1 col-lg-5"><input type="radio" name="reponse" class="btn btn-info" value="<?= $test->Answer2 ?>"><?= $test->Answer2 ?></div>
                        <div id="separation"> </div>
                        <div class="col-lg-offset-1 col-lg-5"><input type="radio" name="reponse" class="btn btn-info" value="<?= $test->Answer3 ?>"><?= $test->Answer3 ?></div>
                        <div class="col-lg-offset-1 col-lg-5"><input type="radio" name="reponse" class="btn btn-info" value="<?= $test->Answer4 ?>"><?= $test->Answer4 ?></div>
                    </div>
                </form>
            </div>
        <?php endforeach; ?>
        <?php require_once 'footer.php'; ?>