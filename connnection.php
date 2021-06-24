<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $db = 'aulafront';
    

    $conn = new mysqli($servername, $username, $password, $db);
    $conn->set_charset('utf8');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;