<?php

require_once('Models/User.php');

use User;

class LoginController
{

    public function index()
    {

        if($_SESSION['user'])
        {

            header('Location: /cookies');

        }
        else {

            return require_once('layouts/login.php');
            
        }



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

            echo true;

        }
        else {

            echo false;

        }

    }

    public function logout()
    {

        $_SESSION['user'] = '';

        session_destroy();

        header("Location: /");

    }

}
