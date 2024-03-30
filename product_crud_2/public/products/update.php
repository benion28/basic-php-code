<?php
  try {
    /** @var $pdo \PDO */
    require_once "../../database.php";
  } catch(PDOException $error) {
    echo "<hr>"."MYSQL Connection failed: " . $error->getMessage()."<hr>";
  }

    $id = $_GET["id"] ?? null;

    if (!$id) {
        header("Location: index.php");
        exit;
    }

    $statement = $pdo->prepare("SELECT * FROM products WHERE id = :id");
    $statement->bindValue(':id', $id);
    $statement->execute();
    $product = $statement->fetch(PDO::FETCH_ASSOC);

  echo "Product: "."<pre>";
  var_dump($product);
  echo "</pre>"."<hr>";

  $title = $product["title"];
  $description = $product["description"];
  $price = $product["price"];
  $errors = [];

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    require_once "../../validate_product.php";
    
    if (empty($errors)) {
      $statement = $pdo->prepare("UPDATE products SET title = :title, image = :image,
        description = :description, price = :price WHERE id = :id");
      $statement->bindValue(':title', $title);
      $statement->bindValue(':image', $imagePath);
      $statement->bindValue(':description', $description);
      $statement->bindValue(':price', $price);
      $statement->bindValue(':id', $id);
      $statement->execute();
      header("Location: index.php");
    }
  }
?>

<?php include_once "../../views/partials/header.php"; ?>

    <p>
        <a class="btn btn-secondary" href="index.php">Go Back to Products</a>
    </p>
    <h1>Update Product: <b> <?php echo $product["title"] ?></b></h1>

    <?php include_once "../../views/products/form.php"; ?>

  </body>
</html>
