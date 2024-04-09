<?php require (__DIR__ .  "/../partials/header.php") ?>
<?php require   (__DIR__ .  "/../partials/nav.php") ?>
<?php require  (__DIR__ .  "/../partials/banner.php") ?>




<main>
    <ul class="m-6">
        <?php foreach ($notes as $note) : ?>


            <li>
                <a href="/webapps/php2/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>

        <?php endforeach ?>
    </ul>

    <p class="m-6 "><a href="/webapps/php2/create" class="bg-blue-500 border p-2 border-xl text-white" >create note</a></p>
</main>



<?php require  (__DIR__ .  "/../partials/footer.php") ?>