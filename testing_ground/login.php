<?php
class connexion extends Database {
        // public string $userdb = "root";
        // public string $password = ""; 

        //requete database
        
        public function login($login,$password)
        {
            //declaration de sessions
            if(!empty($ses)){
                $_SESSION["login"] = $ses["login"];
                echo  $ses["login"];
            }
        }
        // hasher le mdp 
        // mettre les classes et le html dans des fichiers différent 
    }

    if(isset($_POST["submit"])){
        $login = $_POST["login"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $databaseInstances = new connexion();
        $databaseInstances->login($login,$password);
    }
?>
