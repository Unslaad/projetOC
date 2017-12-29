<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="alert">
            <!-- Message flash -->
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
                <div>
                    Blog réalisé pour Jean Forteroche.
                    <?php
                        if (isset($_SESSION['nom']) && $_SESSION['nom'] == 'admin'){
                            echo '<a href="' . 'index.php?action=admin' . '">Accès Interface de gestion</a>';
                        }
                        else{
                            echo '<a href="' . 'index.php?action=admin' . '">Se connecter</a>';
                        }
                    ?>
                </div>
                <a href="index.php">Retour à l'index</a>
            </footer>
        </div>
    </body>
</html>
