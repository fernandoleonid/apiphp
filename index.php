<?php

    include_once ("./controller/routes.php");

    header('content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

    $method = $_SERVER['REQUEST_METHOD'];
    if (isset ( $_GET['url'] ) ) {
        $paths = explode('/', trim($_GET['url']));
        $resource   = array_shift($paths);
        $id         = array_shift($paths);
        routes($method, $resource, $id);
    }

