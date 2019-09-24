<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['user']['security']!=2) {
    header('Location:acceuil');
}
require_once 'header.php';
?>
<div class="row color">
    <div class="container-fluid ">
        <h2 class="text-center mt-4 text-white">Ajouter, Modifier ou supprimer une question du QCM</h2>
        <div class="text-center mt-4">
            <p class="Qcm"><a href="views/Test/TestCreateView.php" class="QcmLink">Ajouter une question</a></p>
            <p class="Qcm"><a href="views/Test/TestUpdateView.php" class="QcmLink">Modifier une question</a></p>
            <p class="Qcm"><a href="views/Test/TestDeleteView.php" class="QcmLink">Supprimer une question</a></p>
        </div>
    </div>
</div>
<div class="row color">
    <div class="container-fluid">
        <input type="image" src='../../assets/img/fleche-haut.jpg' width="50px" height="50px" id="rideUp" />
    </div>
</div>


<!--<table class="table bg-light border rounded border-dark shadow mt-3">
    <thead class="border-dark">
        <tr class="border-dark">
            <th class="border-dark">ID</th>
            <th class="border-dark">Nom</th>
            <th class="border-dark">Description</th>
            <th class="border-dark">Dimension</th>
            <th class="border-dark">Réference</th>
        </tr>
    </thead >
    <tbody class="font-weight-bold border-dark">
        <? php foreach ($testList as $test): ?>
            <tr>
                <td><? = $test->id ?></td>
                <td><? = $test->Question ?></td>
                <td><? = $test->Answer1 ?></td>
                <td><? = $test->Answer2 ?></td>
                <td><? = $test->Answer3 ?></td>
                <td><? = $test->Answer4 ?></td>
                <td><? = $test->TrueAnswer ?></td>
            </tr>
        <? php endforeach ?>
    </tbody>
</table>-->

<?php require_once 'footer.php'; ?>