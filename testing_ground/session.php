<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
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
            <div class="bar-list">
                <input type="search" name="Search_bar">
                <div><a href="#">Login</a></div>
                <div><a href="#">Register</a></div>
                <div><a href="#">Tools</a></div>
            </div>
        </nav>
    </header>
    <section>
        <div class="widget">
            <!-- <h1><?php echo "Hello", $_SESSION["name"];?></h1> -->
            <ul class="taches">
                <h1>Taches</h1>
                <input type="text"  id="todoAdd">
                <button id="add">Ajouter</button>
                <button id="bouton">Sauvegarde</button>
            </ul>
        </div>
    </section>
    <footer>
        <span>Sommaire</span>
        <ul class="summary">
        </ul>
    </footer>
</body>
</html>
