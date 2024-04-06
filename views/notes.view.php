<?php require "partials/header.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>




<main>
    <?php foreach ($notes as $note) : ?>

 
        <li>
            <a href="/webapps/php/notes?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                <?= $note['body'] ?>
            </a>
        </li>

    <?php endforeach ?>
</main>



<?php require "partials/footer.php" ?>