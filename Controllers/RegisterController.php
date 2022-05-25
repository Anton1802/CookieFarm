<?php

require_once('Models/User.php');

use User;

class RegisterController
{
    private function validate($login, $password)
    {

        if(mb_strlen($login) && mb_strlen($password) <= 10 )
        {

            if(ctype_alnum($login) && ctype_alnum($password))
            {

                $_SESSION['error'] = 'Registration success!';

                return [
                    'login' => $login,
                    'password' => $password
                ];

            }

        }
        else {

            $_SESSION['error'] = 'Error: check login and password!';

            header('Location: /register');

            die();

        }

    }

    public function view()
    {

        return require_once('layouts/register.php');

    }

    public function register()
    {

        $data = RegisterController::validate($_POST['login'], $_POST['password']);

        $user = new User;
        $user->insertUser($data['login'], $data['password']);

        header('Location: /register');

    }

}
