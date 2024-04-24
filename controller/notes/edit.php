
<?php

use core\Database;

use core\App;

$db =  App::resolve(Database::class);

$currentUserId = 5;

$note = $db->query("SELECT * FROM notes WHERE id = :id ", [

    'id' => $_GET['id']

])->findORFail();

authorize($note['user_id'] == $currentUserId);

view("notes/edit.view.php", [
    'heading' =>  'Edit Notes',
    'errors' => [],
    'note' =>$note
]);
