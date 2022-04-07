<?php

// Create Router instance
$router = new \Bramus\Router\Router();

$router->get('/', function () {
    include './apps/controller/home.php';
});

$router->run();
