<?php
require_once("Database.php");
if(!isset($_SESSION)){
    session_start();
}
class Task extends Database{
    public $task;

    //Permet de poster les taches dans la DB
    public function postTask($task){
        $id_user = 1;
        foreach ($task as $key => $value) {
            var_dump($value);
            $req = $this->db->prepare("INSERT INTO task (name,id_user) VALUES (:task,:id_user)");
            $req->bindParam(':task',$value,  PDO::PARAM_STR);
            $req->bindParam(':id_user',$id_user, PDO:: PARAM_INT);
            $req->execute();
        }
    }

    // foreach ($task as $key => $value) {
    //     $req = $this->db->prepare("INSERT INTO task (name,id_user) VALUES (:task,:id_user)");   
    //     $req->bindParam(':task',$task[$key] $value = ['name'] PDO::PARAM_STR);
    //     $req->bindParam(':id_user',$id_user, PDO:: PARAM_INT);
    //     $req->execute();
    
    //Supprime des taches dans la DB
    public function delete($task,$id_user){
        $request = $this->db->prepare("DELETE * FROM user WHERE id=");
        $request->bindParam(':task', PDO::PARAM_STR);
        $request->bindParam(':id_user', PDO::PARAM_INT);
        $request->execute();
    }

    //Récupere les taches dans la DB
    public function getTask(){
        $res = $this->db->prepare('SELECT * FROM  task');
        $res->execute();
        $result = $res->fetchAll();
        return $result;
    }
    
}
