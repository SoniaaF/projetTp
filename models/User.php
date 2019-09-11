
<?php


include_once '../../config.php';

class User {

    private $id;
    private $lastName;
    private $firstName;
    private $mail;
    private $password;
    private $security;
    private $id_Test;

    public function __construct() {
        try {
            $this->db = new PDO(DSN, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    // fonctions permettant d'afficher les infos de l'utilisateur
    public function getId() {
        return $this->id;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setId($id) {
        $this->id = (int) $id;
    }

    public function getAllUsers() {
        $sql = 'SELECT * FROM User';
        $usersRequest = $this->db->query($sql);
        $userList = $usersRequest->fetchAll(PDO::FETCH_OBJ);
        return $userList;
    }

    public function createUser($lastName, $firstName, $mail, $password) {
        try {
            $sql = "INSERT INTO User (lastName, firstName, mail, password) VALUES (:lastName, :firstName, :mail, :password)";
            $query = $this->db->prepare($sql);
            // Lier les variables à l'instruction 'prepare' en tant que valeurs
            $query->bindValue(':lastName', $lastName, PDO::PARAM_STR);
            $query->bindValue(':firstName', $firstName, PDO::PARAM_STR);
            $query->bindValue(':mail', $mail, PDO::PARAM_STR);
            $query->bindValue(':password', password_hash($password, 1), PDO::PARAM_STR);
            //execution de la requete
            $query->execute();
            $error = $query->errorInfo();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function emailExists($mail){
        $sql = "SELECT * FROM User WHERE mail = :mail";
        $query = $this->db->prepare($sql);
        $query->bindValue(':mail',$mail);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    //methode qui met à jour le patient
    public function updateUser($id) {
        //preparation de la requete
        $query = $this->db->prepare("UPDATE `users` SET lastName = :lastName, firstName = :firstName, birthDate = :birthDate, phoneNumber = :phoneNumber, address = :address, zipCode = :zipCode, idService = :idService WHERE id = :id;");
        $query->bindValue(':lastName', $_POST['lastName']);
        $query->bindValue(':firstName', $_POST['firstName']);
        $query->bindValue(':birthDate', $_POST['birthDate']);
        $query->bindValue(':phoneNumber', $_POST['phoneNumber']);
        $query->bindValue(':address', $_POST['address']);
        $query->bindValue(':zipCode', $_POST['zipCode']);
        $query->bindValue(':idService', $_POST['service']);
        $query->bindValue(':id', $id);
        //execution de la requete
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        }
        return false;
    }

    //fonction supprimer l'utilisateur
    public function deleteUser($id) {
        // Stockage de la requête SQL
        $request = $this->db->prepare('DELETE FROM `users` WHERE `id` = :id');
        // Association d'une valeur au paramètre
        $request->bindValue(':id', $id, PDO::PARAM_INT);
        // Exécution de la requête SQL
        $request->execute();
    }

    public function verifyUser() {
        $request = $this->db->prepare('SELECT * FROM `users` WHERE `id` = :id');
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($request->execute()) {
            if ($request->columnCount() > 0) {
                return true;
            }
        }
        return false;
    }

    public function getUserById($id) {
        $request = $this->db->prepare('SELECT * FROM `User` WHERE `id` = :id');
        $request->bindValue(':id', $id, PDO::PARAM_INT);
        if ($request->execute()) {
            $user = $request->fetch(PDO::FETCH_OBJ);
            $this->lastName = $user->lastName;
            $this->firstName = $user->firstName;
         
            return true;
        }
        return false;
    }

}
