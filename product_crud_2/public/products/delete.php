<?php 
    try {
        /** @var $pdo \PDO */
        require_once "../../database.php";
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