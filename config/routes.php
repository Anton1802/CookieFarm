<?php

use Router\Router;

Router::route('/', function(){

    require_once('Controllers/HomeController.php');
    HomeController::index();

});

Router::route('/login', function(){

    require_once('Controllers/LoginController.php');
    LoginController::index();

});

Router::route('/login_submit', function() {

    require_once('Controllers/LoginController.php');
    LoginController::login();

});

Router::route('/logout', function() {

    require_once('Controllers/LoginController.php');
    LoginController::logout();

});

Router::route('/register', function(){

    require_once('Controllers/RegisterController.php');
    RegisterController::index();

});

Router::route('/register_submit', function(){

    require_once('Controllers/RegisterController.php');
    RegisterController::register();

});

Router::route('/cookies', function(){
    require_once('Controllers/MyController.php');
    MyController::index();
});

Router::route('/shop', function(){
    require_once('Controllers/ShopController.php');
    ShopController::index();
});

Router::route('/shop/buy/[1-4]', function(){
    require_once('Controllers/ShopController.php');
    ShopController::buy($_SERVER['REQUEST_URI']);
});
