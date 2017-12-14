<?php $this->title = "Authentification"; ?>

            <div id="contenu">
                <h1>Authentification administration</h1>

                <form method="post" action="index.php?action=auth">
                    <input id="pseudo" name="pseudo" type ="text" placeholder="Votre pseudo" required/><br />
                    <input id="mdp" name="mdp" type="password" placeholder="Mot de passe" required /><br />
                    <input type="submit" name="" value="Envoyer">
                </form>
            </div>
