<?php
$servername = "localhost";
$username = "root";
$password = "Valgal360!";
$dbname = "Exercise9";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert into database
$sql = "INSERT INTO users (name, email)
VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>