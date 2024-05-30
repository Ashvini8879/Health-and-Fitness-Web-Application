<?php
require 'config12.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $total_price = $_POST['total_price'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $flat_details = $_POST['flat_details'];
    $location = $_POST['location'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    // Generate a unique order ID for reference
    $orderID = "ORD-" . time();

    // Create a Razorpay order
    $razorpayOrder = [
        'receipt'         => $orderID,
        'amount'          => $total_price * 100,  // Amount in paise
        'currency'        => 'INR',
        'payment_capture' => 1 // Auto capture
    ];

    // Create an order on Razorpay
    $api_endpoint = 'https://api.razorpay.com/v1/orders';
    $key_id = 'YOUR_RAZORPAY_KEY_ID';
    $key_secret = 'YOUR_RAZORPAY_KEY_SECRET';

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $api_endpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($razorpayOrder),
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "Authorization: Basic " . base64_encode($key_id . ":" . $key_secret)
        ],
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    if (!$response) {
        echo "Failed to create Razorpay order.";
        exit;
    }

    $razorpay_order = json_decode($response);

    // Store necessary details in session to be used in orderaccsuccess.php
    $_SESSION['orderID'] = $orderID;
    $_SESSION['product_name'] = $product_name;
    $_SESSION['product_price'] = $product_price;
    $_SESSION['total_price'] = $total_price;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['flat_details'] = $flat_details;
    $_SESSION['location'] = $location;
    $_SESSION['pincode'] = $pincode;
    $_SESSION['city'] = $city;
    $_SESSION['state'] = $state;

    // Redirect to Razorpay payment page
    header("Location: " . $razorpay_order->short_url);
    exit;
} else {
    // Redirect to order.php if accessed directly
    header("Location: orderacc.php");
    exit;
}
?>
