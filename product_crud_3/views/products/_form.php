<p>
    <a class="btn btn-secondary" href="/products">Go Back to Products</a>
</p>

<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
        <div><?php echo $error ?></div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="" method="post" enctype="multipart/form-data">
    <?php if ($product["image"]): ?>
        <img src="../<?php echo $product["image"] ?>" class="update-image">
    <?php endif; ?>
    <div class="form-group">
        <label>Product Image</label>
        <br>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label>Product Title</label>
        <input name="title" type="text" class="form-control" value="<?php echo $product["title"] ?>">
    </div>
    <div class="form-group">
        <label>Product Description</label>
        <textarea name="description" class="form-control"><?php echo $product["description"] ?></textarea>
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input name="price" type="number" step=".01" class="form-control" value="<?php echo $product["price"] ?>">
    </div>
    <button type="submit" class="btn mt-2 btn-primary">Submit</button>
</form>