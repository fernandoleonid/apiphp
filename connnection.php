<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = 'escola';
    

    $conn = new mysqli($servername, $username, $password, $db);
    $conn->set_charset('utf8');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;