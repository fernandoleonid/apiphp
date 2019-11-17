<?php

    include_once ("./controller/routes.php");
    // var_dump (file_get_contents('php://input'));
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