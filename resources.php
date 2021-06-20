<?php

    include_once ("crud.php");

    function mGet ($resource, $id=null) {
        
        $results = read($resource, $id);
        $msgErro = $id ? "id não encontrado" : "Recurso não encontrado";
        if ( $results ) {
            echo json_encode(array("status"=>"success","data"=>$results));
        } else{
            echo json_encode(array("status"=>"error","data"=>$msgErro));
            header('HTTP/1.1 404 Not Found');
        }
        exit;
    }

    function mPost( $resource ) {
        $data = json_decode(file_get_contents('php://input'),true);
        if ($data){
            $result = create($resource, $data);
            echo json_encode(array("status"=>"success","data"=>"Cadastro realizado"));
            header('HTTP/1.1 201 Created');
        }else{
            echo json_encode(array("status"=>"error","data"=>"Falta dados para cadastrar"));
            header('HTTP/1.1 400 Bad Request');
        }
        exit;
    }

    function mPut ( $resource, $id ) {
        $data = json_decode(file_get_contents('php://input'),true);
        $result = update ( $resource, $id, $data );

        if ( $result ) {
            echo json_encode(array("status"=>"success","data"=>"Atualização realizada"));
            header('HTTP/1.1 201 Created');
        }else{
            echo json_encode(array("status"=>"error","data"=>"Falta dados para atualizar"));
            header('HTTP/1.1 400 Bad Request');
        }
        exit;
    }

    function mDelete ( $resource, $id ) {

        $result = delete ( $resource, $id );

        if ( $result ) {
            echo json_encode(array("status"=>"success","data"=>"Registro excluido"));
            header('HTTP/1.1 200 Created');
        }else{
            echo json_encode(array("status"=>"error","data"=>"ID não encontrado"));
            header('HTTP/1.1 400 Bad Request');
        }
        exit;
    }