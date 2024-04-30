<?php

namespace Http\Forms;
use core\validator; 

class LoginForm
{

    protected $errors = [];

    public function validate($email, $password)
    {
        $errors = [];

        if (!validator::email($email)) {
            $this->errors['email'] = "please provide a valid email address";
        }

        if (!validator::string($password)) {
            $this->errors['password'] = "please provide a valid password";
        }

        
        return empty($this->errors);

    }

    public function errors()
    {
        return $this->errors();
    }

    public function error($field, $message){
        $this->errors[$field] = $message;
    }

}
