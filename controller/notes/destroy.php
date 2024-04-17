
<?php
use core\Database;

dd($route);

//this is saying create a variable called $config and require whatever is returned in the config.php file

$config =  require base_path('config.php');

$db = new Database($config['database']);

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


