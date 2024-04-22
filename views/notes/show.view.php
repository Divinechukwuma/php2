<?php require(__DIR__ .  "/../partials/header.php") ?>
<?php require(__DIR__ .  "/../partials/nav.php") ?>
<?php require(__DIR__ .  "/../partials/banner.php") ?>




<main>

  <a href="/webapps/php2/" class="text-blue-500 underline m-10 mt-3">Go Home...</a>

  <p class="m-10">

    <?= htmlspecialchars($note['body']) ?>>
  </p>

  <form method='POST'>
    <input type='hidden' name="_method " value="DELETE">
    <input type='hidden' name='id' value="<?= $note['id'] ?>">
    <button class='bg-red-600 text-white p-3 m-3 text-small'>DELETE</button>

  </form>

</main>

<?php require(__DIR__ .  "/../partials/footer.php") ?>