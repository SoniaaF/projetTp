<?php
session_start();
include '../../controllers/Test/TestUpdateCtrl.php';
require_once '../../header.php';
?>
<div class="container-fluid">
    <div class="row flex-column align-items-center color">
        <section class="signup">
            <div class="container form-signup">
                <div class="signup-content">
                    <h2 class="form-title">Modifier une question du QCM</h2>
                    <form action="" method="POST">
                        <select name="id" id="idService" class="custom-select col-5">
                            <?php foreach ($testList as $test): ?>
                                <option value="<?= $test->id ?>"><?= $test->id ?>. <?= $test->Question ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button class="btn btn-info" type="submit" name="select">Selectioner</button>
                    </form>
                    <?php if($selectedTest){ ?>
                    <form id="contact" action="#" enctype="multipart/form-data" method="POST" id="signup-form" class="signup-form">
                        <div class="form-group">
                            <!-- Question -->
                            <label for="Question" class='font-weight-bold'>Question :</label>
                            <input type="text" class="form-control" name="Question" placeholder="Question" value="<?= isset($Question) ? $Question : $selectedTest['Question'] ?>" required>
                            <span class="help-block error"><?= $formError['Question'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Réponse 1 -->
                            <label for="Answer1" class='font-weight-bold'>Réponse 1 :</label>
                            <input type="text" class="form-control" name="Answer1" placeholder="Réponse 1" value="<?= isset($Answer1) ? $Answer1 : $selectedTest['Answer1'] ?>" required>
                            <span class="help-block error"><?= $formError['Answer1'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Réponse 2 -->
                            <label for="Answer2" class='font-weight-bold'>Réponse 2 :</label>
                            <input type="text" class="form-control" name="Answer2" placeholder="Réponse 2" value="<?= isset($Answer2) ? $Answer2 : $selectedTest['Answer2'] ?>" required>
                            <span class="help-block error"><?= $formError['Answer2'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Réponse 3 -->
                            <label for="Answer3" class='font-weight-bold'>Réponse 3 :</label>
                            <input type="text" class="form-control" name="Answer3" placeholder="Réponse 3" value="<?= isset($Answer3) ? $Answer3 : $selectedTest['Answer3'] ?>" required>
                            <span class="help-block error"><?= $formError['Answer3'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Réponse 4 -->
                            <label for="Answer4" class='font-weight-bold'>Réponse 4 :</label>
                            <input type="text" class="form-control" name="Answer4" placeholder="Réponse 4" value="<?= isset($Answer4) ? $Answer4 : $selectedTest['Answer4'] ?>" required>
                            <span class="help-block error"><?= $formError['Answer4'] ?? '' ?></span>
                        </div>
                        <div class="form-group">
                            <!-- Vrais réponse -->
                            <label for="TrueAnswer" class='font-weight-bold'>Vrais réponse :</label>
                            <select name="TrueAnswer" class="form-control">
                                <option selected disabled value="0">Choisir le numero de la vrais réponse</option>
                                <?php for($answer=1;$answer<4;$answer++) { ?>
                                    <option value="<?= $answer ?>" <?= $answer==$selectedTest['TrueAnswer'] ? 'selected' : '' ?>><?= $answer ?></option>
                                <?php } ?>
                            </select>
                        </div>       
                        <div class="m-3 p-0 d-flex justify-content-around">
                            <button type="submit" name="submit" class="btn btn-outline-primary font-weight-bold mr-0" value=<?= $selectedTest['id'] ?>>Envoyer</button>             
                        </div> 
                    </form>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php require_once '../../footer.php'; ?>