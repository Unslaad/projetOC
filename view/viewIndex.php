<?php $this->title = "Index"; ?>


    <nav>
        <table id="menu">
            <tr>
                <td>Titre</td>
            </tr>
            <?php foreach ($menu as $menu) : ?>
                <tr>
                    <td><?= '<a href="index.php?action=billet&id=' . $menu['id'] . '">' . $menu['titre'] . '</a>'?></td>
                </tr>
            <?php endforeach; ?>
            </table>



<?php foreach ($post as $post) : ?>
    <article>
        <a href="<?= "index.php?action=billet&id=" . $post['id'] ?>">
            <h1><?= $post['titre']?></h1>
        </a>
        <p><?= $post['date_fr']?></p>
        <p><?= substr($post['texte'], 0, 50) . '[...]' ?></p>
    </article>
<?php endforeach; ?>
