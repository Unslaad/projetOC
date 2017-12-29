<?php $this->title = "Back"; ?>

<h1>Interface d'administration</h1>


    <h2>Commentaires signalés</h2>

    <div class="butt">
        <form action="index.php?action=deco" method="post">
            <button type="submit" name="button">Déconnexion</button>
        </form>
        <form action="index.php?action=admin" method="post">
            <button type="submit" name="button">Voir les billets en ligne</button>
        </form>
    </div>

    <table>
        <tr>
            <th>Auteur</th>
            <th>Billet n°</th>
            <th>Commentaire</th>
            <th>Désignaler</th>
            <th>Supprimer</th>
        </tr>
    <?php foreach ($comments as $comment) : ?>
        <tr>
            <th><?= $comment['pseudo']?></th>
            <th><?= $comment['id_post']?></th>
    <?php   if (strlen($comment['commentaire']) > 100){
                echo '<th>' . substr($comment['commentaire'], 0, 100) . '[...]</th>';
            }
            else
                echo '<th>' . $comment['commentaire'] . '</th>';
    ?>
            <th>
                <form action=<?='index.php?action=unflag&id=' . $comment['id']?> method="post">
                    <input type="submit" value="Désignaler"/>
                </form>
            </th>
            <th>
                <form action=<?='index.php?action=supp&id=' . $comment['id']?> method="post">
                    <input type="submit" value="Supprimer" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée ?'))"/>
                </form>
            </th>
        </tr>
    <?php endforeach; ?>
    </table>
