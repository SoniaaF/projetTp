<?php
session_start();
require_once '../../header.php';
include '../../controllers/Test/TestDeleteCtrl.php';
?>
<form method="post">
<div class="form-row justify-content-lg-start my-2">
    <select name="delete" class="custom-select col-5">
        <?php foreach ($testList as $test): ?>
            <option value="<?= $test->id ?>"><?= $test->id ?>.<?= $test->Question ?></option>
        <?php endforeach; ?>
    </select>
</div>
    <input type='submit' name="submit" value="supprimer">
</form>

<?php require_once '../../footer.php'; ?>