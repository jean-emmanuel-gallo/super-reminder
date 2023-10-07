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
    <?php require("DatabaseLogin.php")?>
    <header>
        <nav>
            <div>
                <img class="logo" src="tools.png">
            </div>
            <ul>
                <input type="search" name="Search_bar">
                <div><a href="login.php">Login</a></div>
                <div><a href="register.php">Register</a></div>
                <div><a href="traitement.php">Tools</a></div>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Login</h1>
            <form method="post">
                <label for="login">Email</label>
                <input type="login" name="login">
                <label for="password">Password</label>
                <input type="password" name="password">
                <input type="submit" name="submit">
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
        <form method="post">
            <label for="login">Email</label>
            <input type="login" name="login">
            <label for="password">Password</label>
            <input type="password" name="password">
            <input type="submit" name="submit">
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