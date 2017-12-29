<?php $this->title = "Authentification"; ?>

            <h1 class="auth">Authentification administration</h1>
            <div class="auth">
                <form method="post" action="index.php?action=auth">
                    <input id="pseudo" name="pseudo" type ="text" placeholder="Votre pseudo" required/><br />
                    <input id="mdp" name="mdp" type="password" placeholder="Mot de passe" required /><br />
                    <input type="submit" name="" value="Envoyer">
                </form>
            </div>
