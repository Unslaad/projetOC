<?php $this->title = "Post"; ?>

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

<form method="post" action="index.php?action=comment">
    <input id="pseudo" name="pseudo" type="text" placeholder="Votre pseudo"
           required /><br />
    <textarea id="comment" name="comment" rows="4"
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="postId" value="<?= $post['id'] ?>" />
    <input type="submit" value="Commenter" />
</form>

<?php foreach ($comments as $comment) : ?>
    <p><strong><?= $comment['pseudo'] . ' à ' . $comment['date_fr'] ?></strong></p>
    <p><?= $comment['commentaire']?></p>
    <form action=<?='index.php?action=flag&id=' . $comment['id']?> method="post">
        <input type="submit" value="Signaler le commentaire"/>
    </form>
    <br />
<?php endforeach; ?>
