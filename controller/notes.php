<?php 

//this is saying create a variable called $config and require whatever is returned in the config.php file

$config =  require 'config.php';

$db = new Database($config['database']);


$heading = "My Notes";


// dd($_GET[0]['id']);
// dd($db[]);

 
$notes = $db->query("SELECT * FROM notes WHERE user_id = 2")->fetchAll();

//  dd($notes);

require "./views/notes.view.php";

