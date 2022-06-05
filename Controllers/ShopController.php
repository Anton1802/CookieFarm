<?php

require_once('Models/User.php');

use User;

class ShopController
{

    public function index()
    {

        if($_SESSION['user'])
        {

            $userDB = User::getUserId($_SESSION['user']['id']);

            return require_once('layouts/shop.php');

        }
        else {

            header('Location: /login');

        }

    }

    public function buy($request)
    {

        $type = trim($request, '/shop/buy/');

        $typePrice = [null, 200, 500, 1000, 2000];

        $userDB = User::getUserId($_SESSION['user']['id']);

        if($userDB->coins >= $typePrice[$type])
        {

            User::addCookieUser($type, $_SESSION['user']['id']);

            User::subUserCoins($_SESSION['user']['id'], $typePrice[$type]);

            header("Location: /shop");

        }
        else {

            header("Location: /shop");

        }

    }

}
