<?php
use core\validator;
use core\Database;

require  base_path('validator.php');

$config =  require base_path('config.php');

$db = new Database($config['database']);
$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // :: = this is how you call or trigger a static method on a class

    // it has to be a static function to be called with 2 column ::

    if (!validator::string($_POST['body'], 1, 1000)) {

        $errors['body'] = "A body of no more than 1000 characters is required";
    }




    if (empty($errors)) {

        $db->query("INSERT INTO notes (body, user_id) VALUES(:body, :user_id)", [

            'body' => $_POST['body'],
            'user_id' => 5


        ]);
    }
}

view("notes/create.view.php", [
    'heading' =>  'Create Notes',
    'errors' => $errors
]);
