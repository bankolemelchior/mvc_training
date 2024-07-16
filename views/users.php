<?php
require_once ("./Database.php");
class Users extends Database
{
    public function getAllUsers()
    {
        $sql = "SELECT* FROM user";
        $users = $this->getManyData($sql);
        print_r($users);
    }


    public function getOneUser()
    {
        $sql = "SELECT* FROM user WHERE username = ?";
        $data = ["username"];
        $user = $this->getOneData($data, $sql);
        print_r($user);
    }

    public function updateUser(){
        $sql = "UPDATE user SET user_name = ?, password = ? WHERE id = 1";
        $data = ["username"=> $sql];
        $user = $this->updateData($sql, $data);
        print_r($user);
    }

    public function deleteUser(){
        $sql = "";
        $data = ["username"=> $sql];
        $user = $this->deleteData($data, $sql);
        print_r($user);
    }
}
$instanceUsers = new Users();
$instanceUsers->getAllUsers();
// $instanceUsers->getOneUser();
// $instanceUsers->updateUser();
// $instanceUsers->deleteUser();

