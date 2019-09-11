<?php
session_start();
require_once '../../header.php';
include '../../controllers/Test/TestReadCtrl.php';
?>
<!-- Si personne n'est connecté, on affiche un message pour dire que le QCM est accessible que pour les personnes inscrit -->
<?php if (!isset($_SESSION['user'])) { ?>
<h2 class="text-center">Inscrivez-vous pour passer le test de positionement !</h2>
<p>Inscription</p>
<p>Connexion</p>
<?php }else{ ?>
<!-- Si l'utilisateur est connecté alors on affiche le QCM -->
<?php foreach ($testList as $test): ?>
    <div class="container">
        <div id="question"><?= $test->id ?> <?= $test->Question ?></div>
        <form action="jeu.php" method="POST">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-5">
                    <input type="radio" name="reponse" value="<?= $test->Answer1 ?>"><?= $test->Answer1 ?>
                </div>
                <div class="col-lg-offset-1 col-lg-5">
                    <input type="radio" name="reponse" value="<?= $test->Answer2 ?>"><?= $test->Answer2 ?>
                </div>
                <div id="separation"> </div>
                <div class="col-lg-offset-1 col-lg-5">
                    <input type="radio" name="reponse" value="<?= $test->Answer3 ?>"><?= $test->Answer3 ?>
                </div>
                <div class="col-lg-offset-1 col-lg-5">
                    <input type="radio" name="reponse" value="<?= $test->Answer4 ?>"><?= $test->Answer4 ?>
                </div>
            </div>
        </form>
    </div>
<?php endforeach; ?>
<?php } ?>
<?php require_once '../../footer.php'; ?>