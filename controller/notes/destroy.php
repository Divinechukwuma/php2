
<?php

use core\App;
use core\Database;

$db =  App::resolve(Database::class);


$currentUserId = 5;

$note = $db->query("SELECT * FROM notes WHERE id = :id ", [

  'id' => $_POST['id']

])->findORFail();

authorize($note['user_id'] === $currentUserId);

//form was submitted delete the fomer note

$db->query("DELETE FROM notes WHERE id = :id", [

  'id' => $_POST['id']
]);


header("location: /webapps/php2/notes");

exit();
