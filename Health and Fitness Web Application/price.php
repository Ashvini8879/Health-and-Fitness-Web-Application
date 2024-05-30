<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health and Fitness Subscription</title>
    <link rel="stylesheet" href="price.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <div class="subscription-details">
            <div class="logo">
                <a href="main.php" style="text-decoration: none; color: black; font-size: 25px; font-family: 'Times New Roman', Times, serif;"><img src="cross.png" alt="Health and Fitness Logo"> Subscription Plan</a>
            </div>
            <div class="subscription-plan">
                <div class="subscription-icons">
                    <i class="fas fa-dumbbell"></i>
                    <div class="subscription-text">
                        <br>
                        <h3>Exercise Videos</h3>
                        <p>Access a diverse library of exercise videos.</p>
                    </div>
                </div>
                <div class="subscription-icons">
                    <i class="fas fa-spa"></i>
                    <div class="subscription-text">
                        <h3>Meditation Sessions</h3>
                        <p>Enjoy meditation sessions, free from pesky ads.</p>
                    </div>
                </div>
                <div class="subscription-icons">
                    <i class="fas fa-utensils"></i>
                    <div class="subscription-text">
                        <h3>Personalized Diet Plans</h3>
                        <p>Receive expert-curated, personalized diet plans.</p>
                    </div>
                </div>
            </div>
            
            <form id="subscriptionForm" method="POST">
    <div class="form-group">
        <div class="form-group-inline">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required maxlength="10">
        </div><br>
        <div class="form-group-inline">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div><br>
        <div class="form-group-inline">
            <button id="saveDetailsBtn" class="btn" type="button" style="margin-left: 120px;">Save Details</button>
        </div>
    </div>
    <p id="saveMessage" style="display: none; color: red; margin-left: 70px;">Details Saved... Now proceed to<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PAYMENT</p>
    
    <div class="subscription-options">
        <h3>Select Subscription Duration:</h3>
        <div class="btn-group">
            <button id="payButton" class="btn" type="submit" name="subscription_type" value="1">1 Month - ₹200</button>
            &nbsp;
            <button id="payButton2" class="btn" type="submit" name="subscription_type" value="2">1 Year - ₹800</button><br><br>
        </div>
    </div>
</form>
<br>
<a href="mem_login.php">Already a member? Sign in to your account now!</a>
    </div>

    <div class="video-background">
        <video autoplay muted loop id="video-bg">
            <source src="Untitled video - Made with Clipchamp (2).mp4" type="video/mp4">
         
        </video>
    </div>
    <script>
        const video = document.getElementById('video-bg');
        video.play();
</script>
        <script>
    document.getElementById('saveDetailsBtn').addEventListener('click', function() {
    var phone = document.getElementById('phone').value;
    var password = document.getElementById('password').value;

    // Here you can add validation for phone number and password if needed

    // Send data to PHP file using AJAX
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                if (xhr.responseText === 'PhoneExists') {
                    // Phone number already exists
                    alert('Phone number already exists. Please use a different number.');
                } else {
                    // Phone number doesn't exist, proceed to payment
                    document.getElementById('saveMessage').style.display = 'block';
                    // Optionally, you can redirect the user to the payment page here
                }
            } else {
                console.error('Error saving details:', xhr.responseText);
            }
        }
    };

    xhr.open('POST', 'save_details.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('phone=' + phone + '&password=' + password);
});


    var payButton = document.getElementById('payButton');
    payButton.addEventListener('click', function(e) {
        // Razorpay payment handling, code remains the same
    });

    var payButton2 = document.getElementById('payButton2');
    payButton2.addEventListener('click', function(e) {
        // Razorpay payment handling, code remains the same
    });
</script>

    <script>
        var payButton = document.getElementById('payButton');
        payButton.addEventListener('click', function(e) {
            var options = {
                key: 'rzp_test_IGp0eRPgtHcqQ2',
                amount: 20000,
                currency: 'INR',
                name: 'Health and Fitness Subscription',
                description: 'Subscription Payment',
                image: 'pp.png',
                handler: function(response) {
                    alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
                    window.location.href = 'membership.html';
                },
                prefill: {
                    name: 'Customer Name',
                    email: 'customer@example.com',
                    contact: '9999999999'
                },
                theme: {
                    color: '#007bff'
                }
            };
            var rzp = new Razorpay(options);
            rzp.open();
            e.preventDefault();
        });

        var payButton2 = document.getElementById('payButton2');
        payButton2.addEventListener('click', function(e) {
            var options = {
                key: 'rzp_test_IGp0eRPgtHcqQ2',
                amount: 80000,
                currency: 'INR',
                name: 'Health and Fitness Subscription',
                description: 'Subscription Payment',
                image: 'pp.png',
                handler: function(response) {
                    alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
                    window.location.href = 'membership.html';
                },
                prefill: {
                    name: 'Customer Name',
                    email: 'customer@example.com',
                    contact: '9999999999'
                },
                theme: {
                    color: '#007bff'
                }
            };
            var rzp = new Razorpay(options);
            rzp.open();
            e.preventDefault();
        });
    </script>
   
</body>
</html>
