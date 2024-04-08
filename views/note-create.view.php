<?php require "partials/header.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>




<main>

<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <form action="" method="$_POST">

    <label for="body"> Your notes</label>

        <div>
        <textarea name="body" ></textarea>
        </div>
       

        <p>
            <button type="submit" class="bg-green-600 p-3 text-white m-6"> Create</button>
        </p>
    </form>
</div>
    
</main>



<?php require "partials/footer.php" ?>