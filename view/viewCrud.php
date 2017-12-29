<?php $this->title = "Nouveau Billet"; ?>
<head>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
    <h1>Nouveau post</h1>

    <form action="index.php?action=new" method="post">
        <input type="text" name="titre" value="Titre">
        <br />
        <br />
        <textarea name="texte" value="texte"></textarea>
        <br />
        <input type="submit" value="Envoyer" />
    </form>
