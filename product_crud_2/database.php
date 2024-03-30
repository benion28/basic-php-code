<?php
    // Connection details
    $servername = "localhost";
    $serverport = 3300;
    $database = "products_crud";
    $username = "root";
    $password = "";

    // Create connection
    $pdo = new PDO("mysql:host=$servername;port=$serverport;dbname=$database", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<hr>"."MYSQL Connected successfully"."<hr>";
?>