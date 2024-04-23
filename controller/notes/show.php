<input type='hidden' name="_method" value="DELETE">
<?php

use core\Database;

use core\App;

$db =  App::resolve(Database::class);

$currentUserId = 5;

$note = $db->query("SELECT * FROM notes WHERE id = :id ", [

  'id' => $_GET['id']

])->findORFail();

authorize($note['user_id'] == $currentUserId);

view("notes/show.view.php", [
  'heading' => 'Note',
  'note' => $note
]);
