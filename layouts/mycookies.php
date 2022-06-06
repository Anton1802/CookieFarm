<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resource/css/main.css">
    <link rel="shortcut icon" href="/resource/img/cookie.png">
    <title>Cookies</title>
</head>
<body>

    <?php require_once('header.php') ?>

<div class="cookielist">
    <p class="title_cookielist">My Cookies</p>
    <div class="card">
            <img src="/resource/img/cookie1.png" alt="cookie">
            <p>X <?= $userDB->cookie1 ?></p>
            <p>Coin/h: 5</p>
    </div>
    <div class="card">
            <img src="/resource/img/cookie2.png" alt="cookie">
            <p>X <?= $userDB->cookie2 ?></p>
            <p>Coin/h: 10</p>
    </div>
    <div class="card">
            <img src="/resource/img/cookie3.png" alt="cookie">
            <p>X <?= $userDB->cookie3 ?></p>
            <p>Coin/h: 15</p>
    </div>
    <div class="card">
            <img src="/resource/img/cookie4.png" alt="cookie">
            <p>X <?= $userDB->cookie4 ?></p>
            <p>Coin/h: 20</p>
    </div>
</div>

<div class="profile">
    <img src="/../resource/img/user.png">
    <p>Name: <?=$_SESSION['user']['login']?></p>
    <p>Coins: <?= $userDB->coins ?></p>
</div>

<?php require_once('footer.php') ?>

</body>

<script src="/resource/js/jquery.min.js" charset="utf-8"></script>
<script src="/resource/js/burger.js" charset="utf-8"></script>

</html>
