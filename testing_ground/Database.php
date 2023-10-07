<?php 
    class Database {
        private $db;
        //Connection à la database
         function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=super_reminder;charset=utf8','root','');
        }


        // hasher le mdp 
        // mettre les classes et le html dans des fichiers différent 
        
            // private function passwordverify($login,$password){
            //     if(strlen($email) > 8){
            //         return true;
            //     }
            //     elseif(strlen($password) > 8){
            //         return true;
            //     }
            //     else{
            //         return false;
            //     }
            // }
    }