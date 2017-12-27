<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Billet simple pour l'Alaska</h1></a>
                <p id="descBlog">Bienvenue sur le blog de Jean Forteroche.</p>
            </header>
            <div id="contenu">
                <?= $contenu ?>
            </div>
            <footer id="piedBlog">
                Blog réalisé pour Jean Forteroche.
            </footer>
        </div>
    </body>
</html>
