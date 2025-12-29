<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "metro_train_ticket_booking_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE passenger_details (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
train_name VARCHAR(20) NOT NULL,
seat_no int,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table passenger_details created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>