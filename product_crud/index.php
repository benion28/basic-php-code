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

  $searchTerm = $_GET["search"] ?? "";
  if ($searchTerm) {
    $statement =  $pdo->prepare("SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC");
    $statement->bindValue(':title', "%$searchTerm%");
  } else {
    $statement =  $pdo->prepare("SELECT * FROM products ORDER BY create_date DESC");
  }
  $statement->execute();
  $products = $statement->fetchAll(PDO::FETCH_ASSOC);
  echo "Products: "."<pre>";
  var_dump($products);
  echo "</pre>"."<hr>";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
  </head>
  <body>
    <h1>Product, CRUD!</h1>

    <p>
      <a href="create.php" type="button" class="btn btn-success">Create Product</a>
    </p>

    <form action="" method="get">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" placeholder="Search for Products" value="<?php echo $searchTerm ?>">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">
            Search
          </button>
        </div>
      </div>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
          <th scope="col">Title</th>
          <th scope="col">Price</th>
          <th scope="col">Create Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($products as $index => $product) { ?>
          <tr>
            <th scope="row"><?php echo $index + 1 ?></th>
            <td>
              <img class="thumb-image" src="<?php echo $product["image"] ?>">
            </td>
            <td><?php echo $product["title"] ?></td>
            <td><?php echo $product["price"] ?></td>
            <td><?php echo $product["create_date"] ?></td>
            <td>
              <a href="update.php?id=<?php echo $product["id"] ?>" type="button" class="btn btn-sm btn-outline-primary">Edit</a>
              <form style="display: inline-block;" action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $product["id"] ?>">
                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
              </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
