<?php 

require_once("../models/Database.php");


class UserModel extends Database {

    //Récuprération de tous les users
    public function getAllUsers() {
        $sql = "SELECT * FROM user";
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
    public function create($name, $pw) {
        $sql = "INSERT INTO user (user_name, user_password) VALUES(?, ?)";
        $data = [$name, password_hash($pw, PASSWORD_BCRYPT)];
        $resp = $this->setData($sql, $data);
        echo "$resp ligne insérée";
    }

    public function updateUser($id, $userName, $password){
        $sql = "UPDATE user SET user_name = ?, password = ? WHERE id = ?";

        $data = [$userName, $password, $id];
        $resp = $this->setData($sql, $data);
        echo "$resp ligne modifié";
    }
}


// $instanceUsers = new UserModel();
// // $instanceUsers->getAllUsers();
// $instanceUsers->updateUser(1, "john", "azerty123");