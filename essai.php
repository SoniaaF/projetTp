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
<html>
    <head>
        <title>erer</title>
    </head>
    <body>

        <h1>DELETE</h1>

        <form method="post">



            <input type="number"name='orange'> 
            <input type='submit'name="delete" value="valider">
        </form>

        <h1>Affichage</h1>
        <?php foreach ($testList as $test):?>
        <p><?= $test->IDTest ?></p>
                <p><?= $test->Question ?></p>

                        <p><?= $test->Answer1 ?></p>

                                <p><?= $test->Answer2 ?></p>
                    <?php endforeach; ?>
        
        <h1>UPDATE</h1>
        <form id="contact" method="post">
            <fieldset>
                <select name="orange" id="">
                    <?php foreach ($testList as $test): ?>
                        <option value="<?= $test->IDTest ?>"><?= $test->IDTest ?></option>
                    <?php endforeach; ?>
                </select>
                <legend class="text-center">Formulaire de contact</legend>
                <div class="form-group">
                    <label for="question">Question :</label>
                    <input name="question" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Entrez votre Nom">
                    <label for="answer1">A :</label>
                    <input name="answer1" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Entrez votre Prénom">
                    <label for="answer2">B :</label>
                    <input name="answer2" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Entrez votre email">
                    <label for="answer3">C :</label>
                    <input  name="answer3" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Entrez votre Nom">
                    <label for="answer4">D :</label>
                    <input name="answer4" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Entrez votre Nom">
                    <label for="trueAnswer">Vrais réponse :</label>
                    <input name="trueAnswer" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Entrez votre Nom">
                </div>
            </fieldset>
            <input type="submit" class="btn" name="update" value="valider">
            <!--            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>-->
        </form>

        <form id="contact" method="post">
            <fieldset>

                <legend class="text-center">Formulaire de contact</legend>
                <div class="form-group">
                    <label for="question">Nom :</label>
                    <input name="question" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Entrez votre Nom">
                    <label for="answer1">dimension :</label>
                    <input name="answer1" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Entrez votre Prénom">
                    <label for="answer2">description :</label>
                    <input name="answer2" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Entrez votre email">
                    <label for="answer3">reference :</label>
                    <input  name="answer3" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Entrez votre Nom">
                    <label for="answer4"> image :</label>
                    <input name="answer4" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Entrez votre Nom">
                    <label for="trueAnswer">Vrais réponse :</label>
                    <input name="trueAnswer" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Entrez votre Nom">
                </div>
            </fieldset>
            <input type="submit" class="btn" name="create" value="valider">
            <!--            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>-->
        </form>
    </body>
</html>