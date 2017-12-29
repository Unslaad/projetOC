<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
        integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous">
        </script>
        <script src="contenu/main.js"></script>
        <script src="contenu/jquery.js"></script> 
        <link rel="stylesheet" href="contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="alerte">

        </div>
        <nav>

        </nav>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Billet simple pour l'Alaska</h1></a>
                <p id="descBlog">Bienvenue sur le blog de Jean Forteroche.</p>
            </header>
            <div id="contenu">
                <?= $contenu ?>
            </div>
            <footer id="piedBlog">
                <div id="footer">
                    <p>Blog réalisé pour Jean Forteroche.</p>
                    <p><?php
                        if (isset($_SESSION['nom']) && $_SESSION['nom'] == 'admin'){
                            echo '<a href="' . 'index.php?action=admin' . '">Accès Interface de gestion</a>';
                        }
                        else{
                            echo '<a href="' . 'index.php?action=admin' . '">Se connecter</a>';
                        }
                    ?></p>
                <a href="index.php">Retour à l'index</a>
                </div>
            </footer>
        </div>
    </body>
</html>
