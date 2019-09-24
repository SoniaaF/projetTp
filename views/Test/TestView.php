<?php
session_start();
require_once '../../header.php';
include '../../controllers/Test/TestReadCtrl.php';
?>
<!-- Si personne n'est connecté, on affiche un message pour dire que le QCM est accessible que pour les personnes inscrit -->
<?php if (!isset($_SESSION['user'])) { ?>
    <h2 class="text-center mt-4">Inscrivez-vous pour passer le test de positionement !</h2>
    <p class="Qcm"><a href="../User/addUserForm.php" class="LoginLink">Inscription</a></p>
    <p class="Qcm"><a href="../User/userLogin.php" class="LoginLink">Connexion</a></p>
<?php } else { ?>
    <!-- Si l'utilisateur est connecté alors on affiche le QCM -->
    <div class='container-fluid information'>
        <img class='construct' src="../../assets/img/page_en_construction.png" alt="image indiquant que la page est en construction">
    </div>
    <input type="image" src='../../assets/img/fleche-haut.jpg' width="50px" height="50px" id="rideUp" />
    <?php // foreach ($testList as $test): ?>
    <!--    <div class="container">
            <div id="question">//<?= $test->id ?> <?= $test->Question ?></div>
            <form action="jeu.php" method="POST">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-5">
                        <input type="radio" name="reponse" value="//<?= $test->Answer1 ?>"><?= $test->Answer1 ?>
                    </div>
                    <div class="col-lg-offset-1 col-lg-5">
                        <input type="radio" name="reponse" value="//<?= $test->Answer2 ?>"><?= $test->Answer2 ?>
                    </div>
                    <div id="separation"> </div>
                    <div class="col-lg-offset-1 col-lg-5">
                        <input type="radio" name="reponse" value="//<?= $test->Answer3 ?>"><?= $test->Answer3 ?>
                    </div>
                    <div class="col-lg-offset-1 col-lg-5">
                        <input type="radio" name="reponse" value="//<?= $test->Answer4 ?>"><?= $test->Answer4 ?>
                    </div>
                </div>
            </form>
        </div>-->
    <?php // endforeach; ?>
<?php
}
require_once '../../footer.php';
?>