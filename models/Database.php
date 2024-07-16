<?php

require_once ('../config/env.php');

abstract class Database
{

    protected $db;

    public function __construct(){
        try {
            $this->db = new PDO("mysql:host=" . $_ENV["host"] . ";dbname=" . $_ENV["dbname"], $_ENV["username"], $_ENV["password"]);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie";
        } catch (PDOException $e) {
            echo "mysql:host=" . $_ENV["host"] . ";dbname=" . $_ENV["dbname"], $_ENV["username"], $_ENV["password"];
            echo $e->getMessage();
        }
    }


  

    /**
     * setData va nous aider à faire
     * l'insertion 
     * la modification
     * la suppression
     */
    protected function setData($sql, $data)
    {
        try {
            $req = $this->db->prepare($sql);
            $req->execute($data);
            echo " Requête aboutie";
           return $req->rowCount();
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }


    protected function getOneData($sql, $data)
    {
        try {
           
            $req = $this->db->prepare($sql);
            $req->execute($data);
            $response = $req->fetch(PDO::FETCH_ASSOC);
            echo " Data received successfully";
            return $response;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    # $sql = "SELECT * FROM user WHERE username = ?" ;


    protected function getManyData($sql, $data = null)
    {
        try {
          
            $req = $this->db->prepare($sql);
            $req->execute($data);
            $res = $req->fetchAll(PDO::FETCH_ASSOC);
            echo "All Datas received successfully";
            return $res;
        } catch (PDOException $e) {
            return "Une erreur s'est produite : " . $e->getMessage();
        }
    }

    # $sql = "SELECT * FROM user " ;
# $data = ;
}


















// echo '<pre>';
// var_dump($response);
// echo '</pre>';
// function updateUser()
// {
//     try {
//         $objBdds = connectDB();
//         $sql = "UPDATE user SET username = ?, password = ? WHERE username = Bamos AND password = moufid@123";
//         $res = $objBdds->prepare($sql);
//         $res->execute(["Nafiou", "nafiou@123"]);
//     } catch (PDOException $t) {
//         echo $t->getMessage();
//     }
// }


// new PDO($dns,$username,$password);
// $dns  = "mysql:host=localhost;dbname=todos";
// $username = "root";
// $password = "";

?>