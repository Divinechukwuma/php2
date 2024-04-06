<?php 

//this is saying create a variable called $config and require whatever is returned in the config.php file

$config =  require 'config.php';

$db = new Database($config['database']);


$heading = "My Notes";

 
$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->fetch();

dd($note);

require "./views/notes.view.php";

