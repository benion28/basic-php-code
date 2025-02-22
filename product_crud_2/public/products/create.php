<?php
  try {
    /** @var $pdo \PDO */
    require_once "../../database.php";
  } catch(PDOException $error) {
    echo "<hr>"."MYSQL Connection failed: " . $error->getMessage()."<hr>";
  }

  echo "Files: "."<pre>";
  var_dump($_FILES);
  echo "</pre>"."<hr>";

  $title = "";
  $description = "";
  $price = 0;
  $errors = [];
  $product = [
    "image" => ""
  ];

  if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once "../../validate_product.php";
    
    if (empty($errors)) {
      $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
          VALUES (:title, :image, :description, :price, :create_date)
      ");

      $statement->bindValue(':title', $title);
      $statement->bindValue(':image', $imagePath);
      $statement->bindValue(':description', $description);
      $statement->bindValue(':price', $price);
      $statement->bindValue(':create_date', date('Y-m-d H:i:s'));
      $statement->execute();
      header("Location: index.php");
    }
  }
?>

<?php include_once "../../views/partials/header.php"; ?>

    <p>
        <a class="btn btn-secondary" href="index.php">Go Back to Products</a>
    </p>

    <h1>Create New Product</h1>

    <?php include_once "../../views/products/form.php"; ?>

  </body>
</html>
