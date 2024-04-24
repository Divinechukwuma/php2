<?php

use core\App;
use core\Database;
use core\validator;

$db = App::resolve(Database::class);

$currentUserId = 5;


//find the corresponding note
$note = $db->query("SELECT * FROM notes WHERE id = :id ", [

    'id' => $_POST['id']

])->findORFail();

//authorize that the current user can edit the note

authorize($note['user_id'] == $currentUserId);

//Validate the form

$errors = [];

if (!validator::string($_POST['body'], 1, 1000)) {

    $errors['body'] = "A body of no more than 1000 characters is required";
}

//if no validation errors,update the record in the notes database table

if (count($errors)) {

    view("notes/edit.view.php", [
        'heading' =>  'Edit Notes',
        'errors' => $errors,
        'note' => $note
    ]);
}

//if NO VALIDATION ERROR UPDATE 

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
]);

//REDIRECT AND DIE

header("location : webapps/php2/notes");
die();
