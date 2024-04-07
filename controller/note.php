
<?php

//this is saying create a variable called $config and require whatever is returned in the config.php file

$config =  require 'config.php';

$db = new Database($config['database']);


$heading = " My Note";

$currentUserId = 2;


$note = $db->query("SELECT * FROM notes WHERE id = :id ", [

  'id' => $_GET['id']

])->findORFail();




if ($note['user_id'] !==  $currentUserId) {

  abort(response::UNAUTHORIZED);
}

require "./views/note.view.php";
