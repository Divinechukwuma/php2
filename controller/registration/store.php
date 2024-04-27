<?php

use core\validator;

$email = $_POST['email'];
$password  = $_POST['password'];

//validate the form inputs.

$errors = [];

if(!validator::email($email)){ 
 $errors['email'] = "please provide a valid email address";
}