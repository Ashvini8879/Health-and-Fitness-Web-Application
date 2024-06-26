
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<div class="container">
    <?php
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            
            if ($password === $user["password"]) {
                session_start();
                $_SESSION["user"] = "yes";
                header("Location: main.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email does not match</div>";
        }
    }
    ?>
    <form action="login.php" method="post">
        <div class="alert-box">
            <p class="alert"></p>
        </div>

        <div class="form">
            <h1 class="heading">Login</h1>
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">

            <input type="submit" value="Login" name="login" class="submit-btn">
            <a href="register.php" class="link">Don't have an account? Register one</a>
        </div>
    </form>

    <script src="js/form.js"></script>

</div>
</body>
</html>