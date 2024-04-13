
<?php

use core\Database;

//this is saying create a variable called $config and require whatever is returned in the config.php file

$config =  require base_path('config.php');

$db = new Database($config['database']);


$currentUserId = 5;


$note = $db->query("SELECT * FROM notes WHERE id = :id ", [

  'id' => $_GET['id']

])->findORFail();

authorize($note['user_id'] == $currentUserId);

view("notes/show.view.php", [
  'heading' => 'Note',
  'note' => $note
]);
