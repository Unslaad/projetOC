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
<div class="com">
    <form method="post" action="index.php?action=comment">
        <input id="pseudo" name="pseudo" type="text" placeholder="Votre pseudo"
               required /><br />
        <textarea id="comment" name="comment" rows="8" cols="80" placeholder="Votre commentaire" required></textarea><br />
        <input type="hidden" name="postId" value="<?= $post['id'] ?>" />
        <input type="submit" value="Commenter" />
    </form>
</div>

<?php foreach ($comments as $comment) : ?>
    <article>
    <p><strong><?= $comment['pseudo'] . ' à ' . $comment['date_fr'] ?></strong></p>
    <p><?= $comment['commentaire']?></p>
    <form action=<?='index.php?action=flag&id=' . $comment['id']?> method="post">
        <input type="submit" value="Signaler le commentaire"/>
    </form>
    </article>
<?php endforeach; ?>
