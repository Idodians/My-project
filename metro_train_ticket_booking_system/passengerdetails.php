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

$sql = "INSERT INTO Passenger_details(firstname, lastname, email, train_name, seat_no)
VALUES ('reddy', 'Krishna', 'reddy@example.com', 'Hydrebad_metro',23);";
$sql .= "INSERT INTO Passenger_details(firstname, lastname, email,  train_name, seat_no)
VALUES ('sai', 'krishna', 'sai@example.com','delhi_metro',45);";
$sql .= "INSERT INTO Passenger_details(firstname, lastname, email,  train_name, seat_no)
VALUES ('Julie', 'Dooley', 'julie@example.com','tirupati_metro',10)";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>