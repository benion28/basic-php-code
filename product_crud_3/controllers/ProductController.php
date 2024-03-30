<?php
    namespace app\controllers;
    use app\Router;
    use app\models\Product;

    class ProductController {
        public static function index(Router $router) {
            $searchTerm = $_GET["search"] ?? "";
            $products = $router->db->getProducts($searchTerm);
            echo "Products: "."<pre>";
            var_dump($products);
            echo "</pre>"."<hr>";
            $router->renderView("products/index", [
                "products" => $products,
                "searchTerm" => $searchTerm
            ]);
        }

        public static function create(Router $router) {
            $errors = [];
            $productData = [
                "title" => "",
                "description" => "",
                "price" => "",
                "image" => ""
            ];

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $productData["title"] = $_POST["title"];
                $productData["description"] = $_POST["description"];
                $productData["price"] = (float)$_POST["price"];
                $productData["imageFile"] = $_FILES["image"] ?? null;

                $product = new Product();
                $product->load($productData);
                $errors = $product->save();

                if (empty($errors)) {
                    header("Location: /products");
                    exit;
                }
            }

            $router->renderView("products/create", [
                "product" => $productData,
                "errors" => $errors
            ]);
        }

        public static function update(Router $router) {
            $id = $_GET["id"] ?? null;

            if (!$id) {
                header("Location: /products");
                exit;
            }

            $errors = [];
            $productData = $router->db->getProductById($id);

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $productData["title"] = $_POST["title"];
                $productData["description"] = $_POST["description"];
                $productData["price"] = (float)$_POST["price"];
                $productData["imageFile"] = $_FILES["image"] ?? null;

                $product = new Product();
                $product->load($productData);
                $errors = $product->save();

                if (empty($errors)) {
                    header("Location: /products");
                    exit;
                }
            }

            $router->renderView("products/update", [
                "product" => $productData,
                "errors" => $errors
            ]);
        }
 
        public static function delete(Router $router) {
            $id = $_POST["id"] ?? null;

            if (!$id) {
                header("Location: /products");
                exit;
            }

            $router->db->deleteProduct($id);
            header("Location: /products");
        }
    }
?>