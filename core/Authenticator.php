<?php

namespace core;

class Authenticator
{
    public function attempt($email, $password)
    {

        // match the credentials
        $user = App::resolve(Database::class)->query('SELECT * FROM user WHERE email = :email', [
            'email' => $email
        ])->find();

        if ($user) {

            //we have a user buy we have the check if the the password matches
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email
                ]);

                return true;
            }
        }

        return false;
    }


    public  function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email'],
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        //Log out the user
        session::destroy();
    }
}
