<?php require "partials/header.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>



 
<main>

  <a href="/webapps/php2/" class="text-blue-500 underline m-10 mt-3">Go Home...</a>

        <p class="m-10">

        <?= htmlspecialchars($note['body']) ?>>
        </p>

</main>



<?php require "partials/footer.php" ?>