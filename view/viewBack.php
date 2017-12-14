<?php $this->title = "Back"; ?>

<h1>Interface d'administration</h1>

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

<a href="<?= 'index.php'?>">Retour à l'index</a>