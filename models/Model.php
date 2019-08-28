<?php
include('config.php');
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

    public function createTest($Question, $Answer1, $Answer2, $Answer3, $Answer4, $TrueAnswer) {
      $sql  = "INSERT INTO Test (Question, Answer1, Answer2, Answer3, Answer4, TrueAnswer) VALUES (:Question, :Answer1, :Answer2, :Answer3 , :Answer4, :TrueAnswer)";
      $req = $this->db->prepare($sql);
      $req->bindValue(':Question', $Question, PDO::PARAM_STR);
      $req->bindValue(':Answer1', $Answer1, PDO::PARAM_STR);
      $req->bindValue(':Answer2', $Answer2, PDO::PARAM_STR);
      $req->bindValue(':Answer3', $Answer3, PDO::PARAM_STR);
      $req->bindValue(':Answer4', $Answer4, PDO::PARAM_STR);
      $req->bindValue(':TrueAnswer', $TrueAnswer, PDO::PARAM_STR);
      $req->execute();
      $error=$req->errorInfo();
//      print_r($error);
    }

    public function updateTest($IDTest, $Question, $Answer1, $Answer2, $Answer3, $Answer4, $TrueAnswer){
    try {
      $sql  = "UPDATE Test SET Question = :Question, Answer1 = :Answer1 , Answer2 = :Answer2 , Answer3 = :Answer3 , Answer4 = :Answer4 , TrueAnswer = :TrueAnswer WHERE IDTest = :id";
      $req = $this->db->prepare($sql);
      $req->bindValue(':id', $IDTest, PDO::PARAM_INT);
      $req->bindValue(':Question', $Question, PDO::PARAM_STR);
      $req->bindValue(':Answer1', $Answer1, PDO::PARAM_STR);
      $req->bindValue(':Answer2', $Answer2, PDO::PARAM_STR);
      $req->bindValue(':Answer3', $Answer3, PDO::PARAM_STR);
      $req->bindValue(':Answer4', $Answer4, PDO::PARAM_STR);
      $req->bindValue(':TrueAnswer', $TrueAnswer, PDO::PARAM_STR);
      $req->execute();
      $error=$req->errorInfo();
//      print_r($error);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

    public function deleteTest($id){
    try {
      $sql = "DELETE FROM Test WHERE IDTest = :id";
      // $this->db->prepare($sql);
      $req = $this->db->prepare($sql);
      $req->bindValue(':id', $id, PDO::PARAM_INT);
      $req->execute();
      $error=$req->errorInfo();
//      print_r($error);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

}
