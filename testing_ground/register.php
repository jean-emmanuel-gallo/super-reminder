<?php 

require("inscription.php")

class register extends Database{

    function register($login,$password){
        $data = $this->$db->prepare("INSERT INTO user (`login`,`password`) VALUES (:login, :password)");
        $data->bindValue(':login', $login, PDO::PARAM_STR);
        $data->bindValue(':password', $password, PDO::PARAM_STR)
        $data->execute();
    }
}

?>