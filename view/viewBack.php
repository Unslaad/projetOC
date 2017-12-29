<?php $this->title = "Back"; ?>

<h1>Interface d'administration</h1>
    <h2>Billets</h2>
    <div class="butt">
        <form action="index.php?action=ajout" method="post">
            <button type="submit" name="button">Nouveau post</button>
        </form>
        <form action="index.php?action=deco" method="post">
            <button type="submit" name="button">Déconnexion</button>
        </form>
        <form action="index.php?action=backCo" method="post">
            <button type="submit" name="button">Voir les commentaires signalés</button>
        </form>
    </div>
    <table>
        <tr>
            <th>Titre</th>
            <th>Date</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    <?php foreach ($post as $post) : ?>
        <tr>
            <th>
                <a href="<?= "index.php?action=billet&id=" . $post['id'] ?>"><?= $post['titre']?></a>
            </th>
            <th><?= $post['date_fr']?></th>
            <th>
                <form action=<?='index.php?action=modif&id=' . $post['id']?> method="post">
                    <input type="submit" value="Modifier"/>
                </form>
            </th>
            <th>
                <form action=<?='index.php?action=suppPost&id=' . $post['id']?> method="post">
                    <input type="submit" value="Supprimer" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée ?'))"/>
                </form>
            </th>
        </tr>
    <?php endforeach; ?>
    </table>
