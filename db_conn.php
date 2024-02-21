<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "username"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "your_database"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL statement
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
