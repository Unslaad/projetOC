<?php $this->title = "Index"; ?>

<?php foreach ($post as $post) : ?>
    <article>
        <a href="<?= "index.php?action=billet&id=" . $post['id'] ?>">
            <h1><?= $post['titre']?></h1>
        </a>
        <p><?= $post['date_fr']?></p>
        <p><?= substr($post['texte'], 0, 50) ?></p>
    </article>
<?php endforeach; ?>

<?php
    if (isset($_SESSION['nom']) && $_SESSION['nom'] == 'admin'){
        echo '<a href="' . 'index.php?action=admin' . '">Accès Interface de gestion</a>';
    }
    else{
        echo '<a href="' . 'index.php?action=admin' . '">Se connecter</a>';
    }
?>
