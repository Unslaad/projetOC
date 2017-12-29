<?php $this->title = "Back"; ?>

<h1>Interface d'administration</h1>

<h2>Billets</h2>

<form action="index.php?action=ajout" method="post">
    <button type="submit" name="button">Nouveau post</button>
</form>

<form action="index.php?action=deco" method="post">
    <button type="submit" name="button">Déconnexion</button>
</form>

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

<h2>Commentaires signalés</h2>

<table>
    <tr>
        <th>Auteur</th>
        <th>Commentaire</th>
        <th>Désignaler</th>
        <th>Supprimer</th>
    </tr>
<?php foreach ($comments as $comment) : ?>
    <tr>
        <th><?= $comment['pseudo']?></th>
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

<a href="<?= 'index.php'?>">Retour à l'index</a>
