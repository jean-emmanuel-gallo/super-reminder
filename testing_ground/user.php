<?php 
require("Database.php");
class user extends Database{
    private $login;
    private $password;
    private $id;

    function __construct() {
    }

    function register($login,$password){
        $data = $this->$db->prepare("INSERT INTO user (`login`,`password`) VALUES (:login, :password)");
        $data->bindValue(':login', $login, PDO::PARAM_STR);
        $data->bindValue(':password', $password, PDO::PARAM_STR)
        $data->execute();
    }
}