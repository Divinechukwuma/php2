<input type='hidden' name="_method" value="DELETE">
<?php

use core\Database;
use core\App;

$db =  App::resolve(Database::class);

$notes = $db->query("SELECT * FROM notes WHERE user_id = 5 ")->fetchAll();

// dd($note);

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
