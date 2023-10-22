<?php 
require("Database.php");
class user extends Database{
    private $login;
    private $password;
    private $id;


    function register($login,$password){
        $data = $this->$db->prepare("INSERT INTO user (`login`,`password`) VALUES (:login, :password)");
        $data->bindValue(':login', $login, PDO::PARAM_STR);
        $data->bindValue(':password', $password, PDO::PARAM_STR)
        $data->execute();
    }

    function login($login,$password){
        $requete2 = $db->prepare('SELECT * FROM user WHERE login=? and  password=?');
        $requete2->execute([$login,$password]);
    }

    function update($login,$password){
        $update = $db->prepare("UPDATE * from user where login=? and password=?");
        $update->execute([$login,$password]);
    }
}
