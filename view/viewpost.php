<?php $this->title = "Blog"; ?>

<?php foreach ($post as $post) : ?>
    <article>
        <a href="<?= "index.php?action=billet&id=" . $post['id'] ?>">
            <h1><?= $post['titre']?></h1>
        </a>
        <p><?= $post['date_fr']?></p>
        <p><?= $post['texte']?></p>
    </article>
    <br />
<?php endforeach; ?>

<?php foreach ($comments as $comment) : ?>
    <p><strong><?= $comment['pseudo'] . ' à ' . $comment['date_fr'] ?></strong></p>
    <p><?= $comment['commentaire']?></p>
    <br />
<?php endforeach; ?>

<form method="post" action="index.php?action=comment">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo"
           required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4"
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" value="Commenter" />
</form>
