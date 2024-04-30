<?php

use core\Authenticator;
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

return view('sessions/create.view.php', [
    'errors' => $form->errors()
]);
