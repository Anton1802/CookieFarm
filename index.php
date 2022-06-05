<?php

session_start();

require_once('Router/Router.php');

require_once('config/routes.php');

use Router\Router;

Router::execute($_SERVER['REQUEST_URI']);

?>

<body>
    <script src="/js/jquery.min.js" charset="utf-8"></script>
    <script src="/resource/js/burger.js" charset="utf-8"></script>
</body>
