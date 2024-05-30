<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Login</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
        }

        .membership-container {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center;
            background-color: #c9bfbf;
        }

        .membership-container h2 {
            margin-bottom: 20px;
        }

        .membership-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .membership-form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .membership-form button:hover {
  background-color: #0056b3;
}
@media (max-width: 768px) {
  .logo img {
    width: 50px;
    height: 90px;
  }

}

.logo img {
  width: 50px;
  height: 40px;
 margin-left: -180px;
}
.video-background {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  z-index: -1;
  overflow: hidden;
}

#video-bg {
  min-width: 100%;
  min-height: 100%;
}
    </style>
</head>
<body>
    <div class="membership-container">
    <div class="logo">
                <a href="main.php" style="text-decoration: none; color: black; font-size: 25px; font-family: 'Times New Roman', Times, serif;"><img src="cross.png" alt="Health and Fitness Logo"> Subscription Plan</a>
            </div>
        <h2>Welcome to our Membership Portal</h2>
        <?php if (!isset($_POST['phone']) || !isset($_POST['password'])) : ?>
            <!-- If user hasn't submitted the form yet, show this -->
            <p>Get Membership Now!</p>
            <a href="price.php" class="btn btn-primary">Sign Up</a>
            <hr>
            <p>Already a Member?</p>
            <form class="membership-form" method="POST">
                <input type="tel" name="phone" placeholder="Enter Phone Number" required><br>
                <input type="password" name="password" placeholder="Enter Password" required><br>
                <button type="submit" name="login">Login</button>
            </form>
        <?php else : ?>
            <!-- If user has submitted the form, process login -->
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password_db = "";
            $dbname = "membership";

            $conn = new mysqli($servername, $username, $password_db, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get user input
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            // Check if user exists in database
            $sql = "SELECT * FROM user_details WHERE phone='$phone' AND password='$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // User exists, redirect to another page
                header("Location: membership.html");
                exit();
            } else {
                echo "<p style='color: red;'>Incorrect phone number or password. Please try again.</p>";
            }

            // Close database connection
            $conn->close();
            ?>
        <?php endif; ?>
    </div>
    <div class="video-background">
        <video autoplay muted loop id="video-bg">
            <source src="Untitled video - Made with Clipchamp (2).mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <script>
        const video = document.getElementById('video-bg');
        video.play();
</script>
</body>
</html>
