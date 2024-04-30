<?php

use core\Authenticator;
use core\session;
use Http\Forms\LoginForm;


$email = $_POST['email'];
$password  = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {

    $auth = new Authenticator();

    if ($auth->attempt($email, $password)) {

        redirect('location: /webapps/php2/about');
    }

    $form->error('email', 'No matching account for that email address and password.');
};

session::flash('errors', $form->errors());
session::flash('old', [
    'email' => $email
]);

return view('webapps/php2/login');
