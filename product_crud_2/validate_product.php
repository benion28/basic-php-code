<?php
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $imagePath = "";

    if(!$title) {
      $errors[] = "Product Title is Required";
    }
    if(!$price) {
      $errors[] = "Product Price is Required";
    }

    if (!is_dir(__DIR__."/public/images")) {
      mkdir(__DIR__."/public/images");
    }

    if (empty($errors)) {
      $image = $_FILES["image"] ?? null;
      $imagePath = $product["image"];
      $parsedDate = date('Y-m-d-H-i-s');

      if ($image && $image["tmp_name"]) {
        if ($product["image"]) {
            unlink(__DIR__."/public/".$product["image"]);
        }
        $imagePath = "images/".$title."-".$parsedDate."-".$image["name"];
        move_uploaded_file($image["tmp_name"], __DIR__."/public/".$imagePath);
      }
    }
?>