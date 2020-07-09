<?php

    include_once ("./controller/routes.php");
    // var_dump (file_get_contents('php://input'));
    header('content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    // header("Access-Control-Max-Age: 3600");
    // header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");    
    // header("Access-Control-Allow-Headers: Content-Type, origin");
    // Header('Access-Control-Allow-Headers: AccountKey,x-requested-with, Content-Type, origin, authorization, accept, client-security-token, host, date, cookie, cookie2');
    // Header('Access-Control-Allow-Credentials = true');

    $method = $_SERVER['REQUEST_METHOD'];
    if (isset ( $_GET['url'] ) ) {
        $paths = explode('/', trim($_GET['url']));
        $resource   = array_shift($paths);
        $id         = array_shift($paths);
        routes($method, $resource, $id);
    }

    // $method = $_SERVER['REQUEST_METHOD'];
    // // var_dump (file_get_contents('php://input'));
    // // var_dump ($_SERVER['REQUEST_METHOD']);
    // $paths = explode('/', trim($_SERVER['PATH_INFO'],'/'));
    // $resource = array_shift($paths);
    // $id = array_shift($paths);

    // routes($method, $resource, $id);