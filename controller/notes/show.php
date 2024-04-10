
<?php

//this is saying create a variable called $config and require whatever is returned in the config.php file

$config =  require 'config.php';

$db = new Database($config['database']);


$heading = " My Note";

$currentUserId = 5;


$note = $db->query("SELECT * FROM notes WHERE id = :id ", [

  'id' => $_GET['id']

])->findORFail();

authorize($note['user_id'] == $currentUserId);




base_path(require "./views/notes/show.view.php");
