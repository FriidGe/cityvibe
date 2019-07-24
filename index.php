<?php

    error_reporting(0);

    define('ROOT', dirname(__FILE__));
    include_once ROOT . '/helpers/autoload.php';

    $router = new Router();
    $router->run();