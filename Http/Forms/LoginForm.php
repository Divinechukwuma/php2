<?php

namespace Http\Forms;

use core\ValidationException;
use core\validator;

class LoginForm
{

    protected $errors = [];

    public function __construct($attributes)
    {
        $errors = [];

        if (!validator::email($attributes['email'])) {
            $this->errors['email'] = "please provide a valid email address";
        }

        if (!validator::string($attributes['password'])) {
            $this->errors['password'] = "please provide a valid password";
        }
    }


    public static function validate($attributes)
    {
        $instance = new static($attributes);

        if ($instance->failed()) {
            throw new ValidationException();
        }

        return $instance;

    }

    public function failed()
    {
        return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;
    }
}
