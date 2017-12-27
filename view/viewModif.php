<?php $this->title = "Modifier un Billet"; ?>

<head>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>

    <h1>Nouveau post</h1>

<?php foreach ($post as $post) : ?>

    <form action="<?= "index.php?action=modification&id=" . $post['id'] ?>" method="post">
        <input type="text" name="titre" value="<?= $post['titre']?>">
        <br />
        <br />
        <textarea name="texte" value="texte"><?= $post['texte']?></textarea>
        <br />
        <input type="submit" value="Envoyer" />
    </form>

<?php endforeach; ?>
