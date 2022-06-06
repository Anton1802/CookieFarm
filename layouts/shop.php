<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resource/css/main.css">
    <link rel="shortcut icon" href="/resource/img/cookie.png">
    <title>Shop</title>
</head>
<body>

    <?php require_once('header.php') ?>

<div class="cookielist">
    <p class="title_cookielist">Shop Cookies</p>
    <div class="card">
            <img src="/resource/img/cookie1.png" alt="cookie">
            <p>С/h: 5</p>
            <p>Price: 200C</p>
            <a href="/shop/buy/1"><button>Buy</button></a>
    </div>
    <div class="card">
            <img src="/resource/img/cookie2.png" alt="cookie">
            <p>С/h: 10</p>
            <p>Price: 500C</p>
            <a href="/shop/buy/2"><button>Buy</button></a>
    </div>
    <div class="card">
            <img src="/resource/img/cookie3.png" alt="cookie">
            <p>С/h: 15</p>
            <p>Price: 1000C</p>
            <a href="/shop/buy/3"><button>Buy</button></a>
    </div>
    <div class="card">
            <img src="/resource/img/cookie4.png" alt="cookie">
            <p>С/h: 20</p>
            <p>Price: 2000C</p>
            <a href="/shop/buy/4"><button>Buy</button></a>
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
