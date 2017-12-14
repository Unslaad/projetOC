<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Contenu/style.css" />
        <title>Authentification</title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Billet simple pour l'Alaska</h1></a>
                <p>Je vous souhaite la bienvenue sur le blog de Jean Forteroche.</p>
            </header>
            <div id="contenu">
                <h1>Authentification administration</h1>

                <form method="post" action="index.php?action=auth">
                    <input id="pseudo" name="pseudo" type ="text" placeholder="Votre pseudo" required/><br />
                    <input id="mdp" name="mdp" type="password" placeholder="Mot de passe" required /><br />
                    <input type="submit" name="" value="Envoyer">
                </form>
            </div>
            <footer id="piedBlog">
                Blog réalisé pour Jean Forteroche.
            </footer>
        </div>
    </body>
</html>
