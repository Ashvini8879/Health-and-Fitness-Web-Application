<?php

require 'config12.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "SELECT * FROM accessories WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
      // $pname=$row['product_name'];
    $pname=$row['product_name'];
    $pprice=$row['product_price'];
    $del_charge=50;
    $total_price=$pprice+$del_charge;
    $pimage=$row['product_image'];
    }
    else{ echo 'No product found!';
    }


    // Store the product details in session to use on success page
session_start();
$_SESSION['order_details'] = array(
    'product_name' => $pname,
    'product_price' => $pprice,
    'delivery_charge' => $del_charge,
    'total_price' => $total_price,
    // Add any other details you want to display on success
);

?> 



<!doctype html>
<html lang="en">
  <head>
    <title>Order page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10 mb-5">
<h2 class="text-center p-2 text-primary">Fill the details to complete your order</h2>
<h3>Product Details: </h3>
<table class="table table-bordered" width="500px">
<tr>
<th>Product Name :</th>
<td><?= $pname; ?></td>
<td rowspan="4" class="text-center"><img src="<?= $pimage; ?>" width="200"></td>
</tr>
<tr>
<th>Product Price :</th>
<td>Rs. <?= number_format($pprice); ?>/-</td>
</tr>
<tr>
<th>Delivery Charge :</th>
<td>Rs. <?= number_format($del_charge); ?>/-</td>
</tr>
<tr>
<th>Total Price : </th>
<td>Rs. <?= number_format($total_price); ?>/-</td>
</tr>
</table>

<h4>Contact details :</h4>
<!-- <form action="pay.php" method="post" accept-charset="utf-8"> -->
<input type="hidden" name="product_name" value="<?= $pname; ?>"> 
<input type="hidden" name="product_price" value="<?= $pprice; ?>">
<input type="hidden" name="price" value="<?=$total_price; ?>">

<div class="form-group">
  <input type="text" name="name" class="form-control" id="full_name" placeholder="Full name" required>
</div>
<div class="form-group">
  <input type="email" name="email" class="form-control" placeholder="Your E-mail ID" id="email" required>
</div>
<div class="form-group">
  <input type="tel" name="phone" class="form-control" id="phone_number" placeholder="Your number" required maxlength="10">
</div>




<h4>Shipping Details:</h4>
<form id="shipping_form">
  <div class="form-group">
    
    <input type="text" name="flat_details" class="form-control" placeholder="Your flat/apartment details" required>
  </div>
  <div class="form-group">

    <input type="text" name="location" class="form-control" placeholder="Your location" required>
  </div>
  <div class="form-group">
   
    <input type="text" name="pincode" class="form-control" placeholder="Pincode" id="pin" required>
  </div>
  <div class="form-group">
    
    <input type="text" name="city" class="form-control" placeholder="City" id="city" required>
  </div>
  <div class="form-group">
    
    <select name="state" class="form-control" required>
      <option value="">Select State</option>
      <option value="">Select state</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
    </select>
  </div>
</form>
<!-- <button type="submit" id="pay" class="btn btn-danger btn-lg" >BUY NOW</button> -->
<a href="javascript:void(0)" class="btn btn-md btn-primary float-left buy_now" data-amount="1280" data-id="3">Order Now</a> 
    
</div>
<!-- </form> -->

</div>
</div>
</div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  $(document).ready(function(){
    $('.buy_now').click(function(e){
      if (!validateForm()) {
        alert("Please fill in all the required details.");
        return false; // Prevent form submission
      }
    });

    function validateForm() {
      var isValid = true;
      // Check if any of the required fields are empty
      $('#shipping_form input[required], #shipping_form select[required]').each(function(){
        if ($(this).val() === '') {
          isValid = false;
          return false; // Exit the loop early if any required field is empty
        }
      });
      return isValid;
    }
  });

  $('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var amountInPaise = <?php echo $total_price * 100; ?>; // Convert amount to paise
    var options = {
      "key": "rzp_test_IGp0eRPgtHcqQ2",
      "amount": amountInPaise, // 2000 paise = INR 20
      "name": "Health & Fitness",
      "description": "Payment",
      "image": "image/logo.jpg",
      "handler": function (response){
         console.log(response); // Redirect to success page after successful transaction 
         window.location.href = 'success.php';
      }, 
      "theme": { 
        "color": "#528FF0" 
      } 
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
  });
</script>
<script>
  $(document).ready(function(){
    // Allow only text in the Full name field
    $('#full_name').on('input', function() {
      var input = $(this).val();
      var regex = /[^a-zA-Z ]/gi;
      if (regex.test(input)) {
        $(this).val(input.replace(regex, ''));
      }
    });

    $('#city').on('input', function() {
      var input = $(this).val();
      var regex = /[^a-zA-Z ]/gi;
      if (regex.test(input)) {
        $(this).val(input.replace(regex, ''));
      }
    });
    // Allow only numbers in the phone number field
    $('#phone_number').on('input', function() {
      var input = $(this).val();
      var regex = /[^0-9]/g;
      if (regex.test(input)) {
        $(this).val(input.replace(regex, ''));
      }
    });

    $('#pin').on('input', function() {
      var input = $(this).val();
      var regex = /[^0-9]/g;
      if (regex.test(input)) {
        $(this).val(input.replace(regex, ''));
      }
    });

    $('#email').on('input', function() {
    var input = $(this).val();
      // Regular expression for valid email characters
      var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (!regex.test(input)) {
        // If input does not match the pattern, remove invalid characters
        $(this).val(input.replace(/[^a-zA-Z0-9._%+-@.]/g, ''));
      }
    });
  });
</script>
</body>
</html>