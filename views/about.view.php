<?php include "partials/header.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
        <h1>welcome <?= $_SESSION['user']['email'] ?? '' ?> . </h1> to the about page</p>
    </div>
</main>



<?php require "partials/footer.php" ?>