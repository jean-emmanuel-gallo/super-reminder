<?php
require("Database.php")
class traitement extends Database{
    session_start();
    public $task;
    
    $task = $_GET["param1"];

    public function __construct() {
        parent::__construct();
        $this->task = $task;
    }

    public function task(){
        $require = $this->$db->prepare("INSERT INTO $_SESSION["id"] (`task`) VALUES ($task)");
        $require->bindParam(':task', $this->task, PDO::PARAM_STR);
        $require->execute();
    }
}
?>
