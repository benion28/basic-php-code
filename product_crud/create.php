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

  echo "Files: "."<pre>";
  var_dump($_FILES);
  echo "</pre>"."<hr>";

  $title = "";
  $description = "";
  $price = 0;
  $errors = [];

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $date = date('Y-m-d H:i:s');

    if(!$title) {
      $errors[] = "Product Title is Required";
    }
    if(!$price) {
      $errors[] = "Product Price is Required";
    }

    if (!is_dir("images")) {
      mkdir("images");
    }

    if (empty($errors)) {
      $image = $_FILES["image"] ?? null;
      $imagePath = "";
      $parsedDate = date('Y-m-d-H-i-s');
      if ($image && $image["tmp_name"]) {
        $imagePath = "images/".$title."-".$parsedDate."-".$image["name"];
        move_uploaded_file($image["tmp_name"], $imagePath);
      }
      
      $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
          VALUES (:title, :image, :description, :price, :create_date)
      ");

      $statement->bindValue(':title', $title);
      $statement->bindValue(':image', $imagePath);
      $statement->bindValue(':description', $description);
      $statement->bindValue(':price', $price);
      $statement->bindValue(':create_date', $date);
      $statement->execute();
      header("Location: index.php");
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
  </head>
  <body>
    <h1>Create New Product</h1>

    <?php if (!empty($errors)): ?>
      <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
          <div><?php echo $error ?></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form action="create.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Product Image</label>
            <br>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <label>Product Title</label>
            <input name="title" type="text" class="form-control" value="<?php echo $title ?>">
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea name="description" class="form-control"><?php echo $description ?></textarea>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input name="price" type="number" step=".01" class="form-control" value="<?php echo $price ?>">
        </div>
        <button type="submit" class="btn mt-2 btn-primary">Submit</button>
    </form>

  </body>
</html>
