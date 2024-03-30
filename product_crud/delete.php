<?php 
    try {
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
    } catch(PDOException $error) {
        echo "<hr>"."MYSQL Connection failed: " . $error->getMessage()."<hr>";
    }

    $id = $_POST["id"] ?? null;

    if (!$id) {
        header("Location: index.php");
        exit;
    }

    $statement = $pdo->prepare("DELETE FROM products WHERE id = :id");
    $statement->bindValue(':id', $id);
    $statement->execute();
    header("Location: index.php");
?>