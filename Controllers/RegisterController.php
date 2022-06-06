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

                return [
                    'login' => $login,
                    'password' => $password
                ];

            }

        }
        else {

            return false;

        }

    }

    public function index()
    {

        return require_once('layouts/register.php');

    }

    public function register()
    {

        $data = RegisterController::validate($_POST['login'], $_POST['password']);

        $user = new User;

        if($data && $user->insertUser($data['login'], $data['password']))
        {

            echo true;

        }
        else {

            echo false;

        }

    }

}
