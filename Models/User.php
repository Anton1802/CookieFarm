<?php

class User
{

    private function connect()
    {

    require_once('config/dbdata.php');

    $db = new PDO("mysql:host={$data['host']};dbname={$data['db']}", $data['user'], $data['password']);

    return $db;

    }

    public function insertUser($login, $password)
    {

        $db = $this->connect();

        $sql = "INSERT INTO users (login, password) VALUES (:login, :password)";

        $stmt = $db->prepare($sql);

        $stmt->execute([
            'login' => $login,
            'password' => $password
        ]);

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

}
