<?php $this->title = "Back"; ?>

<h1>Interface d'administration</h1>

<form action="index.php?action=ajout" method="post">
    <button type="submit" name="button">Nouveau post</button>
</form>

<?php foreach ($post as $post) : ?>
    <article id="articles">
        <a href="<?= "index.php?action=billet&id=" . $post['id'] ?>">
            <h1><?= $post['titre']?></h1>
        </a>
        <p><?= $post['date_fr']?></p>
        <p><?= $post['texte']?></p>
    </article>
    <br />
<?php endforeach; ?>

<?php foreach ($comments as $comment) : ?>
    <div id="comments">
        <p><strong><?= $comment['pseudo'] . ' à ' . $comment['date_fr'] ?></strong></p>
        <p><?= $comment['commentaire']?></p>

        <form action=<?='index.php?action=unflag&id=' . $comment['id']?> method="post">
            <input type="submit" value="Désignaler"/>
        </form>
        <form action=<?='index.php?action=supp&id=' . $comment['id']?> method="post">
            <input type="submit" value="Supprimer"/>
        </form>
    </div>
    <br />
<?php endforeach; ?>

<a href="<?= 'index.php'?>">Retour à l'index</a>
