<?php

require_once('Models/User.php');

use User;

class LoginController
{

    public function view()
    {

        return require_once('layouts/login.php');

    }

    public function login()
    {

        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = User::searchUser($login, $password);

        if($user)
        {

            $_SESSION['user'] = [
                'id' => $user->id,
                'login' => $user->login,
                'password' => $user->password
            ];

            $_SESSION['error'] = 'Auth success!';

            header('Location: /');

        }
        else {

            $_SESSION['error'] = 'User not finded!';

            header('Location: /login');;

        }


    }

}
