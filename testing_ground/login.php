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
        <h1>Sign Up</h1>
        <form action="" method="POST" id="theForm">
            <label for="user_name">Name: <span></span></label>
            <input type="text" class="input" name="name" <?php post_value("name"); ?>-attr-name"><?php post_value("name"); ?> id="user_name" placeholder="Your name">

            <label for="user_email">Email: <span></span></label>
            <input type="email" class="input" name="email" <?php post_value("email"); ?>-attr-name"><?php post_value("email"); ?> id="user_email" placeholder="Your email">

            <label for="user_pass">Password: <span></span></label>
            <input type="password" class="input" name="password" <?php post_value("password"); ?>-attr-name"><?php post_value("password"); ?> id="user_pass" placeholder="New password">
            <?php if(isset($result["msg"])){ ?>
            <p class="msg<?php if($result["ok"] === 0){ echo " error"; } ?>"><?php echo $result["msg"]; ?></p>
            <?php } ?>
            <input type="submit" value="Sign Up">
            <div class="link"><a href="./login.php">Login</a></div>
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
include 'inscription.php';
    class connexion extends Database {
        public string $userdb = "root";
        public string $password = ""; 

        //requete database
        
        public function login($login,$password)
        {
            session_start();
            $data = new PDO('mysql:host=localhost;dbname=moduleconnexionb2;charset=utf8','root','');
            $récup = $data->prepare('SELECT * FROM user WHERE login= :login');
            $récup->bindValue(':login', $login, PDO::PARAM_STR);
            $récup->execute();
            $ses = $récup->fetch(PDO::FETCH_ASSOC);
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
