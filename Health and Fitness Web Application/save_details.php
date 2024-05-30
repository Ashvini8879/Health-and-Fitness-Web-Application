
<?php
// Check if data is received
if (isset($_POST['phone']) && isset($_POST['password'])) {
    // Retrieve data from POST
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Validate and sanitize data if needed

    // Connect to your database
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "membership";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO user_details (phone, password) VALUES ('$phone', '$password')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        // If data is inserted successfully, send a success response
        echo "Details saved successfully!";
    } else {
        // If there's an error with the SQL query
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    // If data is not received
    echo "Error: Data not received.";
}
?>
