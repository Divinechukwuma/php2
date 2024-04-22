<?php

use core\Database;

//dd($route);

//this is saying create a variable called $config and require whatever is returned in the config.php file

$config =  require base_path('config.php');

$db = new Database($config['database']);

$notes = $db->query("SELECT * FROM notes WHERE user_id = 5 ")->fetchAll();

// dd($note);

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
 