<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require_once 'startup/config.php';
    require_once 'framework/Router.php';
    $router = new Router();
    $router->route();