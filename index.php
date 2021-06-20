<?php

    include_once ("routes.php");


    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header("Access-Control-Allow-Headers: Content-Type");
    header('content-Type: application/json');


    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS')   exit;


    $method = $_SERVER['REQUEST_METHOD'];
    if (isset ( $_GET['url'] ) ) {
        $paths = explode('/', trim($_GET['url']));
        $resource   = array_shift($paths);
        $id         = array_shift($paths);
        routes($method, $resource, $id);
    }

