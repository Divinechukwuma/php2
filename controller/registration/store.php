<?php

use core\Database;
use core\validator;
use core\App;

$email = $_POST['email'];
$password  = $_POST['password'];

//validate the form inputs.

$errors = [];

if (!validator::email($email)) {
    $errors['email'] = "please provide a valid email address";
}

if (!validator::string($password, 7, 255)) {
    $errors['password'] = "please provide a password of atleast 7 characters.";
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

//check if the account already exists
$user = $db->query('SELECT * FROM user  WHERE  email = :email', [
    'email' => $email
])->find();

if ($user) {
    //then someone with that email already exists and has an account.
    //if yes,redirect to a login page
    header('location: /webapps/php2/');
    exit();
} else {

    // if not,save one to the database,and then log the user in and redirect.
    $db->query('INSERT INTO user(email,password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => $password
    ]);

    //mark that the user has logged in.
    $_SESSION['user'] = [
        'email' => $email,
    ];

    header('location: /webapps/php2/');
    exit();
}
