<?php

    $servername = 'localhost';
    $username = 'root';
    $password = "";
    $database = "ayd2_eduanalisis";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    
    //echo "Connected successfully (".$db->host_info.")";
    
?>