<?php

require_once('Models/User.php');

use User;

class MyController
{

    private function checkFileName($fileName)
    {

        $check = array('/\w.png$/', '/\w.jpg$/');

        for($i=0; $i<count($check); $i++)
        {

            if(preg_match($check[$i], $fileName))
            {

                return true;

            }
            else {

                return false;

            }

        }

    }

    private function getNowDate()
    {

        $date = date('Y-m-d H:i:s');

        return $date;

    }

    private function CoinH($userDB)
    {

        $cookies = [
            'cookie1' => $userDB->cookie1 * 5,
            'cookie2' => $userDB->cookie2 * 10,
            'cookie3' => $userDB->cookie3 * 15,
            'cookie4' => $userDB->cookie4 * 20
        ];

        return array_sum($cookies);

    }

    public function index()
    {

        if($_SESSION['user'])
        {

            $userDB = User::getUserId($_SESSION['user']['id']);

            $timeNow = new DateTime(MyController::getNowDate());
            $timeOld = new DateTime($userDB->date);
            $interval = $timeNow->diff($timeOld);

            $hours = $interval->h + ($interval->d * 24);

            if($hours >= 1)
            {

                User::addCoinsHours($hours, MyController::CoinH($userDB), $_SESSION['user']['id']);
                User::timeNowSet($_SESSION['user']['id'], date('Y-m-d H:i:s'));

                header('Location: /cookies');

            }

            return require_once('layouts/mycookies.php');

        }
        else {

            header('Location: /login');

        }


    }

    public function downloadAvatar()
    {

        $userDB = User::getUserId($_SESSION['user']['id']);
        unlink($userDB->avatar);

        $user = new User;

        $fileName = $_FILES['img']['name'];
        $tmpFileName = $_FILES['img']['tmp_name'];
        $uploadDir = 'resource/img/avatars/';
        $uploadFile = $uploadDir . $fileName;
        $userId = $_SESSION['user']['id'];

        if(move_uploaded_file($tmpFileName, $uploadFile)
        && $this->checkFileName($fileName)
        && $user->updateAvatar($userId, $uploadFile))
        {

            echo true;

        }
        else {

            echo false;

        }

    }

}
