<?php $this->title = "Back"; ?>

<h1>Interface d'administration</h1>

<h2>Billets</h2>

<form action="index.php?action=ajout" method="post">
    <button type="submit" name="button">Nouveau post</button>
</form>

<?php foreach ($post as $post) : ?>
    <article id="articles">
        <a href="<?= "index.php?action=billet&id=" . $post['id'] ?>">
            <h1><?= $post['titre']?></h1>
        </a>
        <p><?= $post['date_fr']?></p>
        <p><?= substr($post['texte'], 0, 50) ?></p>
        <form action=<?='index.php?action=modif&id=' . $post['id']?> method="post">
            <input type="submit" value="Modifier"/>
        </form>
        <form action=<?='index.php?action=suppPost&id=' . $post['id']?> method="post">
            <input type="submit" value="Supprimer"/>
        </form>
    </article>
    <br />
<?php endforeach; ?>
<h2>Commentaires signalés</h2>
<?php foreach ($comments as $comment) : ?>
    <article>
        <p><strong><?= $comment['pseudo'] . ' à ' . $comment['date_fr'] ?></strong></p>
        <p><?= $comment['commentaire']?></p>

        <form action=<?='index.php?action=unflag&id=' . $comment['id']?> method="post">
            <input type="submit" value="Désignaler"/>
        </form>
        <form action=<?='index.php?action=supp&id=' . $comment['id']?> method="post">
            <input type="submit" value="Supprimer"/>
        </form>
    </article>
<?php endforeach; ?>

<a href="<?= 'index.php'?>">Retour à l'index</a>
