<?php 

require_once("../models/Database.php");


class UserModel extends Database {

    //Récuprération de tous les users
    public function getAllUsers() {
        $sql = "SELECT id,user_name, user_email, user_role, created_at FROM user";
       $users = $this->getManyData($sql);
       return $users;
    }

    //Récupération d'un utilisateur
    public function getOneUser($userName){
        $sql = "SELECT * FROM user WHERE user_name = ?";
        $data = array($userName);

        $user = $this->getOneData($sql, $data);
        print_r($user);
    }

    //Inserer un utilisateur
    public function create($name,$email, $pw) {
        // Return current date from the remote server
        $date = date('Y-m-d');
        // $date = date('y-m-d h:i:s');

        $sql = "INSERT INTO user (user_name, user_email, user_password, created_at) VALUES(?, ?, ?, ?)";
        $data = [$name, $email, password_hash($pw, PASSWORD_BCRYPT), $date];
        $resp = $this->setData($sql, $data);
        // echo "$resp ligne insérée";
    }

    public function updateUser($id, $userName, $password){
        $sql = "UPDATE user SET user_name = ?, password = ? WHERE id = ?";

        $data = [$userName, $password, $id];
        $resp = $this->setData($sql, $data);
        echo "$resp ligne modifié";
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM user  WHERE id = ? ";
        $data = [(int)$id];
        $resp = $this->setData($sql, $data);
    }
}


// $instanceUsers = new UserModel();
// // $instanceUsers->getAllUsers();
// $instanceUsers->updateUser(1, "john", "azerty123");