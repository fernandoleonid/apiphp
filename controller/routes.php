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

        $AllowResouces = ['alunos'];
        $AllowMethod = ['POST','PUT','DELETE','GET'];
        
        if (in_array($method,$AllowMethod)){
            if (in_array ( $resource, $AllowResouces)){
                call_user_func_array("m" . $method, array($resource, $id));
            }else
                echo json_encode(array("status"=>"error","data"=>"Recurso não encontrado","recursos disponiveis"=>implode("|",$AllowResouces)));
                header('HTTP/1.1 404 Not Found');
                header('Resouces: ' . implode(",",$AllowResouces));
                exit;
        } else {
            echo json_encode(array("status"=>"error","data"=>"Metodo não permitido","Metodos permitidos"=>"POST, PUT, DELETE, GET"));
            header('HTTP/1.1 405 Method Not Allowed');
            header('Allow: POST, PUT, DELETE, GET');
            exit;
        }
    }