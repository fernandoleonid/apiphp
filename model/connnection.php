<?php
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    

    $conn = new mysqli($servername, $username, $password, "escola");
    $conn->set_charset('utf8');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;