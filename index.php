<?php

session_start();

require_once('Router/Router.php');

require_once('config/routes.php');

use Router\Router;

Router::execute($_SERVER['REQUEST_URI']);
