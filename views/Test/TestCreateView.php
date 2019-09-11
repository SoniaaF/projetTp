<?php
require_once '../../header.php';
include '../../controllers/Test/TestCreateCtrl.php';
?>
<div class="container-fluid">
    <div class="row flex-column align-items-center color">
        <section class="signup">
            <div class="container form-signup">
                <div class="signup-content">
                    <form id="contact" action="" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Ajouter une question au QCM</h2>
                        <div class="form-group">
                            <!-- Question -->
                            <label for="Question" class='font-weight-bold'>Question :</label>
                            <input type="text" class="form-control" name="Question" placeholder="Question" value="<?= $Question ?? '' ?>" required>
                            <span class="help-block error"><?= $formError['Question'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Réponse 1 -->
                            <label for="Answer1" class='font-weight-bold'>Réponse 1 :</label>
                            <input type="text" class="form-control" name="Answer1" placeholder="Votre prénom" value="<?= $Answer1 ?? '' ?>" required>
                            <span class="help-block error"><?= $formError['Answer1'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Réponse 2 -->
                            <label for="Answer2" class='font-weight-bold'>Réponse 2 :</label>
                            <input type="text" class="form-control" name="Answer2" placeholder="Votre prénom" value="<?= $Answer2 ?? '' ?>" required>
                            <span class="help-block error"><?= $formError['Answer2'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Réponse 3 -->
                            <label for="Answer3" class='font-weight-bold'>Réponse 3 :</label>
                            <input type="text" class="form-control" name="Answer3" placeholder="Votre prénom" value="<?= $Answer3 ?? '' ?>" required>
                            <span class="help-block error"><?= $formError['Answer3'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Réponse 4 -->
                            <label for="Answer4" class='font-weight-bold'>Réponse 4 :</label>
                            <input type="text" class="form-control" name="Answer4" placeholder="Votre prénom" value="<?= $Answer4 ?? '' ?>" required>
                            <span class="help-block error"><?= $formError['Answer4'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Vrais réponse -->
                            <label for="TrueAnswer" class='font-weight-bold'>Vrais réponse :</label>
                            <select name="TrueAnswer" class="form-control">
                                <option selected disabled value="0">Choisir le numero de la vrais réponse</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>       
                        <div class="m-3 p-0 d-flex justify-content-around">
                            <input type="submit" name="submit" class="btn btn-outline-primary font-weight-bold mr-0" value="Envoyer">              
                        </div> 
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<?php require_once '../../footer.php'; ?>