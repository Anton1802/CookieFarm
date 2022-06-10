<?php

session_start();

require_once('Router/Router.php');

use Router\Router;

$router = new Router;

$router->run($_SERVER['REQUEST_URI']);

?>
