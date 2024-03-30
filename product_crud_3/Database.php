<?php
    namespace app;

use app\models\Product;
use PDO;

    class Database {
        public \PDO $pdo;
        public static Database $db;

        public function __construct() {
            // Connection details
            $servername = "localhost";
            $serverport = 3300;
            $database = "products_crud";
            $username = "root";
            $password = "";

            // Create connection
            $this->pdo = new PDO("mysql:host=$servername;port=$serverport;dbname=$database", $username, $password);

            // Set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            self::$db = $this;

            echo "<hr>"."MYSQL Connected successfully"."<hr>";
        }

        public function getProducts($searchTerm = "") {
            $searchTerm = $_GET["search"] ?? "";
            if ($searchTerm) {
                $statement =  $this->pdo->prepare("SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC");
                $statement->bindValue(':title', "%$searchTerm%");
            } else {
                $statement =  $this->pdo->prepare("SELECT * FROM products ORDER BY create_date DESC");
            }
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getProductById($id) {
            $statement = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
            $statement->bindValue(':id', $id);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }

        public function createProduct(Product $product) {
            $statement = $this->pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                VALUES (:title, :image, :description, :price, :create_date)
            ");

            $statement->bindValue(':title', $product->title);
            $statement->bindValue(':image', $product->imagePath);
            $statement->bindValue(':description', $product->description);
            $statement->bindValue(':price', $product->price);
            $statement->bindValue(':create_date', date('Y-m-d H:i:s'));
            $statement->execute();
        }

        public function updateProduct(Product $product) {
            $statement = $this->pdo->prepare("UPDATE products SET title = :title, image = :image,
                description = :description, price = :price WHERE id = :id");
            $statement->bindValue(':title', $product->title);
            $statement->bindValue(':image', $product->imagePath);
            $statement->bindValue(':description', $product->description);
            $statement->bindValue(':price', $product->price);
            $statement->bindValue(':id', $product->id);
            $statement->execute();
        }

        public function deleteProduct($id) {
            $statement = $this->pdo->prepare("DELETE FROM products WHERE id = :id");
            $statement->bindValue(':id', $id);
            $statement->execute();
        }
    }
?>