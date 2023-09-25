<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <title>TodoList</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <img class="logo" src="tools.png">
            </div>
            <ul>
                <input type="search" name="Search_bar">
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Tools</a></li>
            </ul>
        </nav>
    </header>
        <main>
        <div class="container">
            <h1>Login</h1>
            <form action="" method="POST">
                <label for="user_email">Email: <span></span></label>
                <input type="email" class="input" name="email" <?php post_value("email"); ?>-attr-name">
                <?php post_value("email"); ?> id="user_email" placeholder="Your email">
                <label for="user_pass">Password: <span></span></label>
                <input type="password" class="input" name="password">
                <?php post_value("password"); ?>-attr-name">
                <?php post_value("password"); ?> id="user_pass" placeholder="Your password">
                <input type="submit" value="Login">
                <div class="link"><a href="./register.php">Sign Up</a></div>
            </form>
        </div>  
        </main>
    <footer>
        <span>Sommaire</span>
        <ul class="summary">
        </ul>
    </footer>
</body>
</html>


<?php 
    class Database {
        public string $userdb = "root";
        public string $password = ""; 

        //Connection à la database
        public function register($login,$password){
            $pdo = new PDO('mysql:host=localhost;dbname=moduleconnexionb2;charset=utf8','root','');

            $stm = $pdo->prepare("INSERT INTO user (login,password) VALUES (:login,:password)");
            $stm->bindValue(':login', $login, PDO::PARAM_STR);
            $stm->bindValue(':password', $password, PDO::PARAM_STR);
            $stm->execute();
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
//envoie du formulaire
    if(isset($_POST["submit"])){
        $login = $_POST["login"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        echo "Succès";
        $databaseInstances = new Database();
        $databaseInstances->register($login,$password);
    }

?>
