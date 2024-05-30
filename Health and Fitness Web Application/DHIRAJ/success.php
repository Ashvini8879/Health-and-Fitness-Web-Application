<?php
session_start();

// Check if order details are available in session
if(isset($_SESSION['order_details'])) {
    $order_details = $_SESSION['order_details'];

    // Clear the session to avoid displaying the same details again on refresh
    unset($_SESSION['order_details']);

    // Connect to your database (replace these with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "products";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into the database
    $order_id = uniqid();
    $order_date = date('Y-m-d');
    $product_name = $order_details['product_name'];
    $product_price = $order_details['product_price'];
    $delivery_charge = $order_details['delivery_charge'];
    $total_price = $order_details['total_price'];

    $sql = "INSERT INTO paymentdet (order_id, order_date, product_name, product_price, delivery_charge, total_price)
            VALUES ('$order_id', '$order_date', '$product_name', '$product_price', '$delivery_charge', '$total_price')";

    if (mysqli_query($conn, $sql)) {
        // Success message if data is inserted
        // You can redirect or display a message here if needed
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // If order details are not found, redirect to homepage or any other page
    header("Location: index.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Order Success</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .order-summary {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .order-summary h4 {
            margin-top: 0;
        }
        .order-summary p {
            margin-bottom: 5px;
        }
        .order-summary hr {
            margin-top: 10px;
            margin-bottom: 15px;
        }
        .btn-home {
            background-color: #007bff;
            color: #fff;
        }
        .btn-home:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="order-summary">
                <h4 class="text-center mb-4">Your Order is Confirmed!</h4>
                <p><strong>Order ID:</strong> #<?php echo $order_id; ?></p>
                <p><strong>Order Date:</strong> <?php echo $order_date; ?></p>
                <hr>
                <h5>Order Details:</h5>
                <p><strong>Product Name:</strong> <?= $product_name; ?></p>
                <p><strong>Product Price:</strong> Rs. <?= number_format($product_price); ?>/-</p>
                <p><strong>Delivery Charge:</strong> Rs. <?= number_format($delivery_charge); ?>/-</p>
                <p><strong>Total Price:</strong> Rs. <?= number_format($total_price); ?>/-</p>
                <!-- Add more details as needed -->
                <hr>
                <div class="text-center">
                    <a href="dhiraj.php" class="btn btn-lg btn-home">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
