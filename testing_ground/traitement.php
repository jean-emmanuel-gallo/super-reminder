<?php
//Creation d'une sessions utilisateur
if(!isset($_SESSION)){
    session_start();
}
require_once("Task.php");

$task = new Task;

//Add une tache dans la DB si un fetch est effectué
if(isset($_GET["param1"])){
    $task->postTask($_POST);
}
//Récupere une taches quand le fetch arrivent
if(isset($_GET["param2"])){
    $result = $task->getTask();
    echo json_encode($result);
}

//Détruit une tache si le bon fetch est recu
if(isset($_POST["param3"])){
    $suppr = $task->deleteTask($task);
}
?>