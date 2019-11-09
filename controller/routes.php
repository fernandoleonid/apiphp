<?php 
    include_once ("./controller/resources.php");
        
    function routes($method, $resource, $id) {
        // switch($method) {
        // case 'POST':
        //     mPost($resource);
        //     break;
        // case 'PUT':
        //     mPut ($resource, $id);
        //     break;
        // case 'DELETE':
        //     mDelete ($resource, $id);
        //     break;    
        // case 'GET':
        //     mGet ($resource, $id);
        //     break;
        // default:
        //     header('HTTP/1.1 405 Method Not Allowed');
        //     header('Allow: POST, PUT, DELETE, GET');
        //     break;
        // }

        if (in_array($method,['POST','PUT','DELETE','GET'])){
            if (in_array ( $resource, ['alunos','professores'])){
                call_user_func_array("m" . $method, array($resource, $id));
            }else
                header('HTTP/1.1 404 Not Found');
                header('Allow: POST, PUT, DELETE, GET');
        } else {
            header('HTTP/1.1 405 Method Not Allowed');
            header('Allow: POST, PUT, DELETE, GET');
        }
    }