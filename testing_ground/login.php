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
