<?php

use Router\Router;

Router::route('/', function(){

    require_once('Controllers/HomeController.php');
    HomeController::index();

});

Router::route('/login', function(){

    require_once('Controllers/LoginController.php');
    LoginController::view();

});

Router::route('/login_submit', function() {

    require_once('Controllers/LoginController.php');
    LoginController::login();

});

Router::route('/register', function(){

    require_once('Controllers/RegisterController.php');
    RegisterController::view();

});

Router::route('/register_submit', function(){

    require_once('Controllers/RegisterController.php');
    RegisterController::register();

});
