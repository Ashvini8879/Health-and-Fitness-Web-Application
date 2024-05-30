<?php
require 'treadmils.php';
$msg="";
if(isset($_POST['submit'])){
  $p_name = $_POST['productName'];
  $p_price = $_POST['productPrice'];

  $target_dir = "products/";
  $target_file = $target_dir.basename($_FILES['productImage']["name"]);
  move_uploaded_file($_FILES['productImage']["tmp_name"],$target_file);

  $sql = "INSERT INTO shoppingpro(product_name,product_price,product_image) VALUES('$p_name','$p_price','$target_file')";
 if(mysqli_query($conn,$sql)){
  $msg= "Product Added to the databse successfully!";
 } 
 else{
  $msg =" Failure to add the product..";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Product</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="product-form">
    <h2>Add Product</h2>
    <form id="productForm" method="post" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" required>
      </div>
      <div class="form-group">
        <label for="productPrice">Product Price:</label>
        <input type="number" id="productPrice" name="productPrice" required>
      </div>
      <div class="form-group">
        <label for="productImage">Product Image:</label>
        <input type="file" id="productImage" name="productImage" accept="image/*" required>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">Add</button>
      </div>
      <div class="form-group">
        <h4> <?= $msg; ?></h4>
      </div>
    </form>
    <a href="product.php" class="product-page-link">
        <button class="product-page-btn">Go to Product Page</button>
      </a>
  </div>
</body>
</html>