<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
   

    .category-sublink {
      display: none;
    }

    .nav-item:hover .category-sublink {
      display: block;
    }

    .navbar-nav .nav-link {
      padding: 0.5rem 1rem;
      transition: background-color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      background-color: gray;
    }

    .dropdown-menu {
      border-radius: 0;
      border: none;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .dropdown-item {
      padding: 0.5rem 1rem;
      transition: background-color 0.3s ease;
    }

    .dropdown-item:hover {
      background-color: gray;
      color: #fff;
    }

    .btn-buy {
      background-color: beige;
      color: black;
      transition: all 0.3s ease;
      
    }

    .btn-buy:hover {
      background-color: burlywood;
    }

    .horizontal-image {
        width: 120%;
       height: 180px;
       margin-left: 0%;
       padding: 0px;

    }

    .headline {
      margin-left: 80px;
    }

   
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="shopping.jpg" alt="Logo" class="shop" style="height: 30px; width:30px;">&nbsp;
<a class="navbar-brand" href="dhiraj.php"><b>H&F</b> Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="dhiraj.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="men.php">Men</a>
          <a class="dropdown-item" href="women.php">Women</a>
          <a class="dropdown-item" href="tread.php">Cardio</a>
          <a class="dropdown-item" href="cycle.php">Cycles</a>
          <a class="dropdown-item" href="health.php">Supplements</a>
          <a class="dropdown-item" href="Accessories.php">Accessories</a>
        </div>
        
      </li>
    </ul>
  </div>
</nav>
<br>



<!-- Headline -->
<div class="headline">
 <h2> Footwear </h2>
</div>

<!-- PHP Images -->
<?php
require 'treadmils.php';
$sql = "SELECT * FROM footwear";
$result = mysqli_query($conn, $sql);
?>
<div class="container">
  <div class="row">
    <?php
    while ($row = mysqli_fetch_array($result)) {
    ?>
      <div class="col-lg-3 mt-3 mb-3">
        <div class="card-deck">
          <div class="card ">
            <img src="<?= $row['product_image']; ?>" class="card-img-top" height="300">
            <h6 class="card-title">Product : <?= $row['product_name']; ?></h6>
            <h6>Price : <?= number_format($row['product_price']); ?>/-</h6>
            <a href="order.php?id=<?= $row['id']; ?>" class="btn btn-buy">Buy Now</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>