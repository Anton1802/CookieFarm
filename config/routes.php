<?php

return [
'/\/$/' => ['HomeController', 'index',[]],
'/\/login$/' => ['LoginController', 'index', []],
'/\/login_submit$/' => ['LoginController', 'login', []],
'/\/logout$/' => ['LoginController', 'logout', []],
'/\/register$/' => ['RegisterController', 'index', []],
'/\/register_submit$/' => ['RegisterController', 'register', []],
'/\/cookies$/' => ['MyController', 'index', []],
'/\/shop$/' => ['ShopController', 'index', []],
'/\/shop\/buy\/[1-4]$/' => ['ShopController', 'buy', [$_SERVER['REQUEST_URI']]],
];
