<?php

//login the user if the credential matches

use core\Database;
use core\validator;
use core\App;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password  = $_POST['password'];

//validate the form inputs.

$errors = [];

if (!validator::email($email)) {
    $errors['email'] = "please provide a valid email address";
}

if (!validator::string($password)) {
    $errors['password'] = "please provide a valid password";
}

if (!empty($errors)) {
    return view('sessions/create.view.php', [
        'errors' => $errors
    ]);
}

//match the credentials
$user = $db->query('SELECT * FROM user WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {

    //we have a user buy we have the check if the the password matches
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email
        ]);

        header('location: /webapps/php2/about');
        exit();
    }
}


return view('sessions/create.view.php', [
    'errors' => [
        'email' => 'No matching account for that email address and password.'
    ]
]);
