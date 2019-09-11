<?php

include_once '../../config.php';

class Test {

    function __construct() {
        try {
            $this->db = new PDO(DSN, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function getAllTest() {
        $sql = 'SELECT * FROM Test';
        $testRequest = $this->db->query($sql);
        $testList = $testRequest->fetchAll(PDO::FETCH_OBJ);
        return $testList;
    }
    // Methode qui créer une question
    public function createTest($Question, $Answer1, $Answer2, $Answer3, $Answer4, $TrueAnswer) {
        $sql = "INSERT INTO Test (Question, Answer1, Answer2, Answer3, Answer4, TrueAnswer) VALUES (:Question, :Answer1, :Answer2, :Answer3 , :Answer4, :TrueAnswer)";
        // Lier les variables à l'instruction 'prepare' en tant que valeurs
        $req = $this->db->prepare($sql);
        $req->bindValue(':Question', $Question, PDO::PARAM_STR);
        $req->bindValue(':Answer1', $Answer1, PDO::PARAM_STR);
        $req->bindValue(':Answer2', $Answer2, PDO::PARAM_STR);
        $req->bindValue(':Answer3', $Answer3, PDO::PARAM_STR);
        $req->bindValue(':Answer4', $Answer4, PDO::PARAM_STR);
        $req->bindValue(':TrueAnswer', $TrueAnswer, PDO::PARAM_STR);
        // Exécution de la requête SQL
        $req->execute();
        $error = $req->errorInfo();
    }

    // Methode qui met à jour une question
    public function updateTest($id, $Question, $Answer1, $Answer2, $Answer3, $Answer4, $TrueAnswer) {
        try {
            $sql = "UPDATE Test SET Question = :Question, Answer1 = :Answer1 , Answer2 = :Answer2 , Answer3 = :Answer3 , Answer4 = :Answer4 , TrueAnswer = :TrueAnswer WHERE id = :id";
            // Lier les variables à l'instruction 'prepare' en tant que valeurs
            $req = $this->db->prepare($sql);
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->bindValue(':Question', $Question, PDO::PARAM_STR);
            $req->bindValue(':Answer1', $Answer1, PDO::PARAM_STR);
            $req->bindValue(':Answer2', $Answer2, PDO::PARAM_STR);
            $req->bindValue(':Answer3', $Answer3, PDO::PARAM_STR);
            $req->bindValue(':Answer4', $Answer4, PDO::PARAM_STR);
            $req->bindValue(':TrueAnswer', $TrueAnswer, PDO::PARAM_STR);
//            var_dump($req);
//            die();
            // Exécution de la requête SQL
            $req->execute();
//            $error = $req->errorInfo();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // Fonction supprimer une question
    public function deleteTest($id) {
        try {
            $sql = "DELETE FROM Test WHERE id = :id";
            // Stockage de la requête SQL
            $req = $this->db->prepare($sql);
            // Association d'une valeur au paramètre
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            // Exécution de la requête SQL
            $req->execute();
            $error = $req->errorInfo();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
