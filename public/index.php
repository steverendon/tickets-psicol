<?php

require __DIR__.'/../vendor/autoload.php';

if (! empty($_GET['controller'])) {
    $controller = $_GET['controller'] . 'Controller';
} else {
    $controller = 'HomeController';
}

if (! empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

$controllerName = 'Steven\Tickets\Controllers\\' . $controller;

$controllerInstance = new $controllerName;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controllerInstance->$action($_POST);
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $controllerInstance->$action($_GET);
}
