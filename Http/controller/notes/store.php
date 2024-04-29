<?php

use core\validator;

use core\Database;

use core\App;

$db =  App::resolve(Database::class);

$errors = [];

if (!validator::string($_POST['body'], 1, 1000)) {

    $errors['body'] = "A body of no more than 1000 characters is required";
}


if (!empty($errors)) {

    return view("notes/create.view.php", [
        'heading' =>  'Create Notes',
        'errors' => $errors
    ]);
}



$db->query("INSERT INTO notes (body, user_id) VALUES(:body, :user_id)", [

    'body' => $_POST['body'],
    'user_id' => 5

]);

header("location: /webapps/php2/notes");
die();
