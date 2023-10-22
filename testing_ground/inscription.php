<?php
//envoie du formulaire
class inscription{
    if(isset($_POST["submit"])){
        $login = $_POST["login"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        echo "Succès";
        $databaseInstances = new Database();
        $databaseInstances->register($login,$password);
    }
}
?>