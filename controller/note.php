
<?php 

//this is saying create a variable called $config and require whatever is returned in the config.php file

$config =  require 'config.php';

$db = new Database($config['database']);


$heading = " My Note";


$note = $db->query("SELECT * FROM notes WHERE id = :id ", [

    'id' => $_GET['id']

    ])->fetch();

  if(! $note){
    abort();
  }

  if($note['user_id'] !==  2){

    abort(403);

  }

require "./views/note.view.php";

