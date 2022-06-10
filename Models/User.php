<?php

class User
{

    private function connect()
    {

    $data = require('config/dbdata.php');

    try{

        $db = new PDO("mysql:host={$data['host']};dbname={$data['db']}",$data['user'],$data['password']);

    } catch (PDOException $e) {

        die('Подключение не удалось!' . $e->getMessage());
    }

    return $db;

    }

    public function insertUser($login, $password)
    {

        $db = $this->connect();

        $sql = "INSERT INTO users (login, password) VALUES (:login, :password)";

        $stmt = $db->prepare($sql);

        if($stmt->execute(['login' => $login,'password' => $password]))
        {

            return true;

        }

    }

    public function searchUser($login, $password)
    {

	    $db = User::connect();

	    $sql = "SELECT * FROM users WHERE login = :login AND password = :password";
	    $stmt = $db->prepare($sql);

	    $stmt->execute([
		    'login' => $login,
		    'password' => $password
	    ]);

	    return $stmt->fetch(PDO::FETCH_LAZY);

    }

    public function addCookieUser($type, $userId)
    {

        $cookie = 'cookie' . $type;

        $db = User::connect();

        $sql = "UPDATE users SET $cookie = $cookie + 1 WHERE id = :id";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':id', $userId);

        if($stmt->execute())
        {

            return true;

        }
        else {

            return false;

        }

    }

    public function getUserId($id)
    {

        $db = User::connect();

        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_LAZY);

    }

    public function addCoinsHours($hours, $coinH, $id)
    {

        $db = User::connect();

        $sql = "UPDATE users SET coins = coins + :hours * :coins WHERE id = :id";
        $stmt = $db->prepare($sql);

        $stmt->execute([
            'coins' => $coinH,
            'hours' => $hours,
            'id' => $id,
        ]);

    }

    public function subUserCoins($id, $sub)
    {

        $db = User::connect();

        $sql = "UPDATE users SET coins = coins - :sub WHERE id = :id";
        $stmt = $db->prepare($sql);

        $stmt->execute([
            'id' => $id,
            'sub' => $sub,
        ]);

    }

    public function timeNowSet($id, $time)
    {

        $db = User::connect();

        $sql = "UPDATE users SET date = :time WHERE id = :id";
        $stmt = $db->prepare($sql);

        $stmt->execute([
            'time' => $time,
            'id' => $id
        ]);

    }

}
