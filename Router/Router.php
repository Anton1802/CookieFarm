<?php

namespace Router;

class Router
{

    private $routes = array();

    private function enum($routes, $url)
    {

        foreach($this->routes as $router => $conFunctParam)
        {

            if(preg_match($router, $url))
            {

                $controller = $conFunctParam[0];
                $function = $conFunctParam[1];
                $parametrs = $conFunctParam[2];

                require_once("Controllers/$controller.php");

                $contr = new $controller;

                call_user_func_array(array($contr, $function), $parametrs);

                return true;

            }

        }

    }

    public function run($url)
    {

        $this->routes = require_once('config/routes.php');

        if(!$this->enum($this->routes, $url))
        {

            return require_once('layouts/page404.php');

        }

    }

}
