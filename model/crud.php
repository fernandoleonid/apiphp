<?php

    function create ($resource, $data) {
        $conn =  include_once("./model/connnection.php");

        function quotes ( $value ) {
            return "'$value'";
        }
        $campos = implode (",", array_keys($data));
        $valores = implode (",", array_map("quotes", $data));

        $sql = "INSERT INTO $resource ($campos) VALUES ($valores)";
        $result = $conn->query($sql);
        return $result;
    }

    function read ($resource, $id=null) {
        $conn =  include_once("./model/connnection.php");
        $sql = $id ? "SELECT * FROM $resource WHERE id=$id" : $sql = "SELECT * FROM $resource";
        $result = $conn->query($sql);
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : $result;

    }
    
    function update ($resource, $id, $data) {
        $conn =  include_once("./model/connnection.php");

        $update = "";
        foreach ( $data as $field => $value ){
            $update .= "$field='$value',";
        }
        $update = trim($update,",");

        $sql = "UPDATE $resource SET $update WHERE id=$id";
        $result = $conn->query($sql);
        return  $result;
        
    }

    function delete ( $resource, $id ) {
        $conn = include_once ("./model/connnection.php");
        $sql = "DELETE FROM $resource WHERE ID=$id";
        return $conn->query($sql);
        
    }




